<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function articles($id)
    {
        return "Halaman artikel dengan ID " . $id;
    }
}
