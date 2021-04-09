<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use App\Models\Products;

class ProjectController extends Controller
{
    public function index(){
        $url = url('/');
        $companies = Companies::with([])->where('web_url', $url)->first();
        if (!$companies) {
            return response('domain is not registered');
        }
        $contents = Products::with([])->where('company_id', $companies->id)->get();
        return view('pages.frontend.gading.project', compact('contents'));
    }
}
