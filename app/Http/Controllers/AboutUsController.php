<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index(){

        return redirect('https://www.educastudio.com/about-us');
    }
}
