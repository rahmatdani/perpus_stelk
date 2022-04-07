<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function home()
    {
        return view('home',[
            "title" => "Home" 
        ]);
    }
}
