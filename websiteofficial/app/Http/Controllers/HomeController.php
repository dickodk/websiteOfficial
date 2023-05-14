<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Type $var = null)
    {
        echo "Selamat Datang di Klinik Kami";
    }
}
