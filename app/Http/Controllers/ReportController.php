<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function userReportsCommission(){    	
    	return view('report.commission');
    }
    public function userReportsSales(){    	
    	return view('report.sales');
    }
    public function userReportsPayout(){    	
    	return view('report.payout');
    }
}
