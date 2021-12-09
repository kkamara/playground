<?php

namespace App\Models\Dir;

use Illuminate\Database\Eloquent\Builder;
use App\Models\DirFile\DirFile;

trait DirRelations
{
    /**
     * Get parent directory.
     * @return Builder
     */
    public function parent() {
        return $this->belongsTo(self::class);
    }

    /**
     * Get directory files.
     * @return Builder
     */
    public function files() {
        return $this->hasMany(DirFile::class);
    }
}
