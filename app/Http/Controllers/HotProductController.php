<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotProductController extends Controller
{
    public function index()
    {
        return view('hot-product');
    }
}
