<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Companies;

class ClientController extends Controller
{
    public function index(){
        $url = url('/');
        $company = Companies::with(['clients'])->where('web_url', $url)->first();
        if(!$company){
            return response('domain is not registered');
        }
        $clients = [];
        if ($company->clients->isNotEmpty()) {
            $clients = $company->clients;
        }

        return view('pages.frontend.gading.client', compact('clients'));
    }
}

