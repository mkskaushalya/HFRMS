<?php

namespace App\Http\Controllers;

class HallController extends Controller
{
    public function index()
    {
        return view('halls.index');
    }
}
