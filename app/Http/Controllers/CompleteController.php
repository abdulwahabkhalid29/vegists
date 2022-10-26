<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompleteController extends Controller
{
    public function ordercomplete(){
        return view('vegist.ordercomplete');
    }
}