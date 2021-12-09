<?php

namespace App\Models\DirFile;

use App\Models\Dir\Dir;

trait DirFileScopes
{
    /**
     * Query scope gets directory belonging to.
     * @return Builder
     */
    public function scopeGetDir($query) {
        return $query->belongsTo(Dir::class);
    }

    /**
     * Query scope considers input string.
     * @return Builder
     */
    public function scopeSearch($query, string $searchTerm) {
        return $query->where(
            'name', 
            'LIKE',
            '%'.$searchTerm.'%'
        );
    }
}
