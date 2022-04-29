<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArifController extends Controller
{
    public function index()
    {
        return view('ARIF.index');
    }
    public function index_next()
    {
        return view('ARIF.index_next');
    }
}
