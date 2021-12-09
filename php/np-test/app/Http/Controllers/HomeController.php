<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\DirFile\DirFile;
use App\Models\Dir\Dir;

class HomeController extends Controller
{
    /**
     * @return Response
     */
    public function showForm() {
        $title = "Show form";
        return view('home.show_form', compact('title'));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function handleForm(Request $request) {
        $title = "Results | Show form";
        /**
         * Search query from input.
         * @var String
         */
        $searchTerm = $request->search;
        $results = array();
        if (null !== $searchTerm) {
            $dirs = Dir::search($searchTerm)->get();
            foreach($dirs as $dir) {
                array_push($results, $dir);
            }
            $files = DirFile::search($searchTerm)->get();
            foreach($files as $file) {
                array_push($results, $file);
            }
        }
        return view(
            'home.handle_form', 
            compact('title', 'results')
        );
    }
}
