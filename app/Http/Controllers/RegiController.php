<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegiController extends Controller
{
    public function regi() {return view('regi');
    }
    public function check(){return view('check');}
    public function lk(){return view('lk');}
    public function change(){return view('change');}
}
