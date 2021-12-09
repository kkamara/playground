<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Comment;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;

    public $newComment, $image, $ticketID;

    protected $listeners = [
        'fileUpload' => 'handleFileUpload',
        'ticketSelected',
    ];

    public function ticketSelected($ticketID) {
        $this->ticketID = $ticketID;
    }

    public function handleFileUpload($imageData) {
        $this->image = $imageData;
    }

    /**
     * Validate fields when updated.
     * @param Mixed $field
     */
    public function updated($field) {
        $this->validateOnly($field, [
            'newComment'=>'required|max:191',
        ]);
    }

    public function addComment() {
        $this->validate([
            'newComment'=>'required|max:191',
        ]);
        $image = $this->storeImage();
        Comment::create([
            'body' => $this->newComment,
            'image' => $image,
            'support_ticket_id' => $this->ticketID,
        ]);
        $this->newComment = '';
        $this->image = '';
        session()->flash('message', 'Comment added successfully.');
    }

    public function storeImage() {
        if(!$this->image) {
            return null;
        }

        $img = ImageManagerStatic::make($this->image)->encode('jpg');
        $name = Str::random().'.jpg';
        Storage::disk('public')->put($name, $img);
        return $name;
    }

    public function remove($commentID) {
        $comment = Comment::find($commentID);
        Storage::delete($comment->image);
        $comment->delete();
        session()->flash('message', 'Comment deleted successfully.');
    }

    public function render()
    {
        return view('livewire.comments', [
            'comments' => Comment::where('support_ticket_id', $this->ticketID)
                ->latest()
                ->paginate(2),
        ]);
    }

    public function paginationView()
    {
        return 'pagination-links';
    }
}
