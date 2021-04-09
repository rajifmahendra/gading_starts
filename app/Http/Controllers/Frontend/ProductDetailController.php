<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use App\Models\Products;

class ProductDetailController extends Controller
{
    public function index($id)
    {
        $url = url('/');
        $companies = Companies::with([])
            ->where('web_url', $url)
            ->first();
        if (!$companies) {
            return response('domain is not registered');
        }
        $contents = Products::with(['product_category'])
            ->where('company_id', $companies->id)
            ->where('id', $id)
            ->first();
        return view('pages.frontend.gading.product_detail', compact('contents'));
    }
}
