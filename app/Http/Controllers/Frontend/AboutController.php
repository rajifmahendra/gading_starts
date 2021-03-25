<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use App\Models\Contents;
use Illuminate\Support\Facades\URL;

class AboutController extends Controller
{
    public function index(){
        $url = URL::to('/');
        $companies = Companies::with([])->where('web_url', $url)->first();
        if(!$companies){
            return response('domain is not registered');
        }
        $contents  = Contents::with([])->where('companies_id', $companies->id)->where('section', section_base_content().'_about')
            ->where('content_name','about_description')->first();
        return view('pages.frontend.gading.about', compact('contents'));
    }
}
