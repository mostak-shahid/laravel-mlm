<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class MailboxController extends Controller
{
    public function index(){
    	return view('mailbox.index');
    }
    public function compose(){
        return view('mailbox.create');
    }
    public function store(Request $request){
        // dd($request->all());
        Session::flash('success','Message sent.');
        return redirect()->route('user.mailbox.sent');
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
