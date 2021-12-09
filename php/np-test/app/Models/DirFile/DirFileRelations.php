<?php

namespace App\Models\DirFile;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Dir\Dir;

trait DirFileRelations
{
    /**
     * Get directory.
     * @return Builder
     */
    public function dir() {
        return $this->belongsTo(Dir::class);
    }
}
