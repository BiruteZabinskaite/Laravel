<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    function changeLanguage($language, Request $request){
        $request->session()->put('lang',$request);
        return redirect()->back();
    }
}
