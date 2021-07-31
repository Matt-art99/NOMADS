<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailControler extends Controller
{
    public function index()
    {
        return view('pages.detail');
    }
}
