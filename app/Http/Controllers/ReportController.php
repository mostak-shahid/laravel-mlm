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
    public function userReportsPerformance(){    	
    	return view('report.performance');
    }
    public function adminBusinessSummary(){
        return view('report.business_summary');
    }
    public function adminBusinessTransactions(){
        return view('report.business_transactions');
    }
}
