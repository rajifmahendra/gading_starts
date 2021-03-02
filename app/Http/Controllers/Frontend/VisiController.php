<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function index(){
        return view('pages.frontend.gading.visi');
    }
}

