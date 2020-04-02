<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class PagesController extends Controller
{
    public function index(Request $request)
    {
      $countries = Countries::all()->pluck('name.common');
      
      // dd($countries);

      return view('register', compact('countries'));
    }
}
