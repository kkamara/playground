<?php

namespace App\Models\Dir;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\DirFile\DirFile;

class Dir extends Model
{
    use HasFactory;
    use DirRelations;
    use DirScopes;

    /**
     * Fillable data
     * @var Array
     */
    protected $fillable = ['name', 'parent_id'];

    /**
     * @return String
     */
    public function getFullPathAttribute() {
        $result = array($this->attributes['name']);

        $parent = $this->parent()->first();
        
        while(null !== $parent) {
            array_push($result, $parent->name);
            $parent = $parent->parent()->first();
        }

        return implode('/', $result);
    }
}
