<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function viewContent(){
        return view('pages.home');
    }
}
