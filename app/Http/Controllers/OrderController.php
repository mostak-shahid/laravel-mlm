<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function userOrderHistory(){
    	return view('order.history');
    }
    public function userOrderShow($id){
    	return view('order.show');
    }
}
