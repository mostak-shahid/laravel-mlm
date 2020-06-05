<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function userNetworkIndex(){    	
    	return view('network.index');
    }
    public function userNetworkSponsor(){    	
    	return view('network.sponsor');
    }
    public function userNetworkTree(){    	
    	return view('network.tree');
    }
    public function userNetworkDownline(){    	
    	return view('network.downline');
    }
    public function userNetworkReferral(){    	
    	return view('network.referral');
    }
}
