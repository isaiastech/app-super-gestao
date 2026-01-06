<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNos extends Controller
{
    public function index()
    {
        return view('site.sobrenos');
    }
}
