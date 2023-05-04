<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthoController extends Controller
{
    public function autho() {
        return view('autho');
    }
    public function auth() {
        return view('auth');
    }
    public function exit() {
        return view('exit');
    }
}
