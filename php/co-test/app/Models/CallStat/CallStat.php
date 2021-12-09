<?php

namespace App\Models\CallStat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallStat extends Model
{
    use HasFactory, CallStatRelations;

    /**
     * Fillable resource items.
     * @var Array
     */
    protected $fillable = array(
        'length', 'recording_url',
    );
}
