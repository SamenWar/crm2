<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SPAcontroller extends Controller
{
    public function index()
    {
        return view('index');
    }
}
