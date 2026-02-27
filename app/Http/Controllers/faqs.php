<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Faqs extends Controller
{
    public function index()
    {
        return view('faqs');
    }
}
