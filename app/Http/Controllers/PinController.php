<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;

class PinController extends Controller
{
    public function userPinHistory(){
    	return view('pin.history');
    }
    public function userPinRequest(){
    	return view('pin.request');
    }
    public function userPinTransfer(){
    	return view('pin.transfer');
    }
    public function userPinPurchase(){
    	return view('pin.purchase');
    }
    public function adminPinAll(){
    	return view('pin.all');
    }
    public function adminPinApproval(){
    	return view('pin.approval');
    }
}
