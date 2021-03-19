<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlowController extends Controller
{
    public function index(){
        return view('pages.frontend.gading.flow');
    }
}
