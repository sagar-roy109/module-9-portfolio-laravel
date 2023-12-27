<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function viewContent(){
        return view('pages.contact');
    }
}
