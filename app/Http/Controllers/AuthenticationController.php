<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use DataTables;

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
    public function adminAuthenticationApproval(Request $request){
        if($request->ajax()) {
            // $data = Mailbox::where('user_id',Auth::id())->latest()->get();
            $data = User::all();
            return DataTables::of($data)
                ->addColumn('sponsor', function($data){
                    return '<b>Sponsor Name (Sponsor ID)</b>';
                })
                ->addColumn('parent', function($data){
                    return '<b>Parent Name (Parent ID)</b>';
                })
                ->addColumn('package', function($data){
                    return '<u>Package</u>';
                })
                ->addColumn('created_at', function($data){
                    return $data->created_at->diffForHumans();
                })
                ->addColumn('action', function($data){
                    return '<div class="btn-group float-right"><a class="btn btn-sm btn-success" href="'.route('user.mailbox.show',['id'=>$data->id]).'" data-placement="top" data-toggle="tooltip" data-original-title="Approve"><i class="fa fa-check"></i></a><a class="btn btn-sm btn-danger" href="'.route('user.mailbox.show',['id'=>$data->id]).'" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a></div>';
                })
                ->rawColumns(['sponsor','parent','package','action'])
                ->make(true);
        }
        return view('authentication.approval');
//        $data = User::all();
//        return view('authentication.approval')->with('data',$data);

    }
}
