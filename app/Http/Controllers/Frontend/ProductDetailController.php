<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ProductDetailController extends Controller
{
    public function index()
    {
        return view('pages.frontend.gading.product_detail');
    }
}
