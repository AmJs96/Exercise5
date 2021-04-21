<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function list()
    {
        $list = array(
            '1- Title: Kafka on the Shore
            ISBN: 1843431106
            Book category: Magical realism, fantasy
            No of pages: 505',

            '2- Title: Eleanor & Park
            ISBN: 	1250012570
            Book category: Romance 
            No of pages: 333'
        );
        return view('list', compact('list'));
    }
}
