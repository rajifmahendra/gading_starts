<?php

use App\Models\Companies;

if (! function_exists('section_base_content')) {
    function section_base_content()
    {
        $url = url('/');
        $company = Companies::with([])->where('web_url', $url)->first();
        if(!$company){
            return '';
        }
        $companyName = $company->name;
        if ($companyName) {
            $companyName = trim($companyName, " "); // remove white space
            $companyName = str_replace(' ', '_', $companyName); // replace space with underscore
            $companyName = strtolower($companyName);
        }
        return $companyName;
    }
}
