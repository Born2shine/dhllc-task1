<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'salary' => 'required',
            'country' => 'required',
        ]);

        $user = User::create($data)->save();

        if ($user) {
            session()->flash('message', 'Regristration Successfull');
            return back();
        }

    }
}
