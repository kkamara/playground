<?php

namespace App\Models\Foreign;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

use App\Models\QueryType\QueryType;
use App\Models\CallStat\CallStat;
use App\Models\Campaign\Campaign;

trait ForeignRelations 
{
    /**
     * @return Collection|Model
     */
    public function queryType() {
        return $this->hasOne(QueryType::class);
    }

    /**
     * @return Collection|Model
     */
    public function callStat() {
        return $this->hasOne(CallStat::class);
    }

    /**
     * @return Collection|Model
     */
    public function campaign() {
        return $this->hasOne(Campaign::class);
    }
}
