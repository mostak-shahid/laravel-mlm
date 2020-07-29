<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard(){
    	return view('user.admin');
    }
    public function userDashboardIndex(){
    	return view('user.index');
    }
    public function adminSettings(){
        return view('settings.general');
    }
    public function adminCompensation(){
        return view('settings.compensation');
    }
    public function adminBianary(){
        return view('settings.bianary');
    }
    public function adminLevel(){
        return view('settings.level');
    }
    public function adminReferal(){
        return view('settings.referal');
    }
    public function adminPayout(){
        return view('settings.payout');
    }
    public function adminPayment(){
        return view('settings.payment');
    }
    public function adminSignup(){
        return view('settings.signup');
    }
    public function adminMail(){
        return view('settings.mail');
    }
    public function adminTree(){
        return view('settings.tree');
    }
    public function adminApi(){
        return view('settings.api');
    }
}
