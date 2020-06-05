<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function userWalletStatement(){
    	return view('wallet.statement');
    }
    public function userWalletTransfer(){
    	return view('wallet.transfer');
    }
    public function userWalletHistory(){
    	return view('wallet.history');
    }
    public function userWalletEarnings(){
    	return view('wallet.earnings');
    }
    public function userWalletPayout(){
    	return view('wallet.payout-request');
    }
    public function userWalletPayoutSatus(){
    	return view('wallet.payout-status');
    }
}
