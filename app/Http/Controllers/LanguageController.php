<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    public function index($locale){
        if (isset($locale)) {
            Session::forget('locale');
            $session = Session::put('locale', $locale);
        }
        return redirect()->back();
    }
}
