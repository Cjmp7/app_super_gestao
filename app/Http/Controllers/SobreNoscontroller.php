<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNoscontroller extends Controller
{
     public function SobreNos () {
       return view('site.sobre-nos');
    }
}
