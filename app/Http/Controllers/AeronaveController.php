<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AeronaveController extends Controller
{
    public function index()
    {
        return view('aeronave.index');
    }

}
