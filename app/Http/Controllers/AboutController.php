<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function viewContent(){
        return view('pages.about');
    }
}
