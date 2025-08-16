<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexAbout()
    {
        return view('About'); // lowercase is standard
    }
}
