<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use App\Models\Contents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    public function index(){
        $url = URL::to('/');
        $companies = Companies::with([])->where('web_url', $url)->first();
        $contents = Contents::with([])->where('companies_id', $companies->id)->where('section','expressa_pariwara_media_home')->get();
        return view('pages.frontend.gading.index', compact('contents'));
    }
}
