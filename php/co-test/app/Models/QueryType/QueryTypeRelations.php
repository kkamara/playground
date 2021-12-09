<?php

namespace App\Models\QueryType;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Models\Foreign\Foreign;

trait QueryTypeRelations 
{
    /**
     * @return Collection|Model
     */
    public function queryType() {
        return $this->belongsTo(Foreign::class);
    }
}
