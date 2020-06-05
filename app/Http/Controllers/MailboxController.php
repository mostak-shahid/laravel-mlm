<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function index(){
    	return view('mailbox.index');
    }
    public function compose(Request $request){
        return view('mailbox.create');
    }
    public function starred(){
    	return view('mailbox.starred');
    }
    public function trash(){
    	return view('mailbox.trash');
    }
    public function show($id){
    	return view('mailbox.show');
    }
}
