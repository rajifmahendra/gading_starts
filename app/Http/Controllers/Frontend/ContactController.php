<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('pages.frontend.gading.contact');
    }

    public function storeContactUs(Request $request){
        $storeContactUs = $this->send($request->all());
        return back()->with('message', $storeContactUs);
    }

    public function send($params){
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => env('MBS_URL').'/api/contact-us',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 60,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($params),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            return $response;
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }
}
