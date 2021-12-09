<?php

namespace App\Models\Campaign;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Models\Foreign\Foreign;

trait CampaignRelations 
{
    /**
     * @return Collection|Model
     */
    public function queryType() {
        return $this->belongsTo(Foreign::class);
    }
}
