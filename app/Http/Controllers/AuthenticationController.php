<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function userAuthenticationRegister(){
    	return view('authentication.register');
    }
    public function userAuthenticationProfile(){
    	return view('authentication.profile');
    }
    public function userAuthenticationPassword(){
    	return view('authentication.password');
    }
    public function userAuthenticationPin(){
    	return view('authentication.pin');
    }
}
