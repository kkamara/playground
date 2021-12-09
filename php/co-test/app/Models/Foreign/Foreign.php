<?php

namespace App\Models\Foreign;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foreign extends Model
{
    use HasFactory, ForeignRelations;

    /**
     * Fillable resource items.
     * @var Array
     */
    protected $fillable = array(
        'name', 'phone', 'email'
    );
}
