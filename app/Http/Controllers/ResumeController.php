<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    function viewContent(){
        return view('pages.resume');
    }
}
