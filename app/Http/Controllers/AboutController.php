<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return "Nama : Siti Aisyah <br> 
                 NIM : 2041720061";
    }
}
