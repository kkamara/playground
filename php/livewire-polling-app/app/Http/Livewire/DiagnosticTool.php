<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DiagnosticTool extends Component
{
    public bool $active = false;
    public string $message = '';

    protected $listeners = [
        'toggleActive',
        'ping-time' => 'getPingDuration', 
        'ping-sent' => 'replyToClient',
    ];

    public function toggleActive(): void {
        $this->active = !$this->active;
    }

    public function replyToClient($sentTime)
    {
        $this->emit("ping-reply", $sentTime);
    }

    public function getPingDuration($difference)
    {
        $this->message = "The request-response time was $difference milliseconds";
    }

    public function render()
    {
        return view('livewire.diagnostic_tool');
    }
}
