<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id){
        if ($id == 1) {
            return redirect('https://www.educastudio.com/news/');
        } else if($id == 2){
            return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
        }
    }
}
