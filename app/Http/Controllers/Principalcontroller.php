<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principalcontroller extends Controller
{
    public function principal() {
       return view('site.principal');
    }
}
