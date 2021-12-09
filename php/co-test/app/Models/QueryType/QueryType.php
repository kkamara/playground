<?php

namespace App\Models\QueryType;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QueryType extends Model
{
    use HasFactory, QueryTypeRelations;

    /**
     * Fillable resource items.
     * @var Array
     */
    protected $fillable = array('title');
}
