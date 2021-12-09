<?php

namespace App\Models\Campaign;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory, CampaignRelations;

    /**
     * Fillable resource items.
     * @var Array
     */
    protected $fillable = array(
        'name', 'description',
    );
}
