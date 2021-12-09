<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services\CatFact;

class CatFactController extends Controller
{
    public function __construct(private ?CatFact $catFact)
    {
        $this->catFact = new CatFact;
    }

    /**
     * @param Illuminate\Http\Request $request
     */
    public function getCatFact(Request $request) {
        return $this->catFact->getFacts($request->query('amount') ?: 1);
    }
}
