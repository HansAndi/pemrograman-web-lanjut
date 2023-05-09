<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function index()
    {
        $menus = menu::all();
        return view('menu', compact('menus'));
    }
}
