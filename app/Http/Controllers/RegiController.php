<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegiController extends Controller
{
    public function regi() {return view('regi');
    }
    public function check(){return view('check');}
}
