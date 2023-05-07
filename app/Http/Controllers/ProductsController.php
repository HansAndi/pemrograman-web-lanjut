<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function games(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }

    public function magang(){
        return redirect('https://www.educastudio.com/cetegory/marbel-and-friends-school');
    }

    public function kunjungan(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    }
}
