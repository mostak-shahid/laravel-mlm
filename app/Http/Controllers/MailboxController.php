<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Mailbox;
use Session;
use Auth;
use DataTables;

class MailboxController extends Controller
{
    public function index(Request $request){
        $data = array();
        if($request->ajax()) {
            $query = DB::table('mailboxes')->join('mailbox_user','mailboxes.id','=','mailbox_user.mailbox_id')->get();
            foreach ($query as $value){
                if ($value->user_id == Auth::id() AND $value->status=='inbox'){
                    $data[] = $value;
                }
            }
            return DataTables::of($data)
                ->addColumn('checkbox', function($data){
                    return '<div class="custom-control custom-checkbox mb-3"><input name="emails[]" value="'.$data->id.'" type="checkbox" class="custom-control-input" id="email-'.$data->id.'"><label class="custom-control-label" for="email-'.$data->id.'"></label></div>';
                })
                ->addColumn('stared', function($data){
                    $cls='';
                    if (!$data->read) $cls='text-dark font-weight-bold';
                    if ($data->starred) {
                        $starred='text-warning fa-star';
                        $url = route('user.mailbox.dislike',['id'=>$data->id]);
                    }
                    else {
                        $starred='fa-star-o';
                        $url = route('user.mailbox.like',['id'=>$data->id]);
                    }
                    return '<a href="'.$url.'" class="star stared"> <i class="fa '.$starred.'"></i> </a> <a class="'.$cls.'" href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->type.'</a>';
                })
                ->addColumn('subject', function($data){
                    $cls='';
                    if (!$data->read) $cls='text-dark font-weight-bold';
                    return '<a class="'.$cls.'" href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->subject.'</a>';
                })
                ->addColumn('created_at', function($data){
                    return '<div class="text-right">'.$data->created_at.'</div>';
                })
                ->rawColumns(['checkbox','stared','subject','created_at'])
                ->toJson();
        }
        return view('mailbox.index');
//    	return view('mailbox.index')->with('data',$data);
    }
    public function compose(){
        $users = User::where('id','!=',Auth::id())->get();
        return view('mailbox.create')->with('users',$users);;
    }
    public function store(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'subject'=>array('required','max:255'),
            'type'=>array('required'),
            'message'=>array('required'),
        ]);
        $parent = ($request->parent)?$request->parent:0;
        $mailbox = Mailbox::create([
            'user_id'=>Auth::id(),
            'type'=>$request->type,
            'subject'=>$request->subject,
            'parent'=>$parent,
            'message'=>$request->message,
        ]);
        if($request->type == 'Admin'){
            $user = User::find(1);
            $mailbox->users()->attach($user, ['status' => 'inbox', 'starred' => 0, 'read' => 0]);
        }
        elseif($request->type == 'Internal Mail'){
            $users = User::whereIn('id', $request->members)->get();
            foreach ($users as $user) {
                $mailbox->users()->attach($user, ['status' => 'inbox', 'starred' => 0, 'read' => 0]);
            }
        }
        Session::flash('success','Message sent.');
        if($parent) return redirect()->back();
        return redirect()->route('user.mailbox.sent');
    }
    public function like($id){
        DB::table('mailbox_user')->where('mailbox_id', $id)->where('user_id', Auth::id())->update(['starred' => 1]);
        return redirect()->back();
    }
    public function dislike($id){
        DB::table('mailbox_user')->where('mailbox_id', $id)->where('user_id', Auth::id())->update(['starred' => 0]);
        return redirect()->back();
    }
    public function starred(Request $request){
        $data = array();
        if($request->ajax()) {
            $query = DB::table('mailboxes')->join('mailbox_user','mailboxes.id','=','mailbox_user.mailbox_id')->get();
            foreach ($query as $value){
                if ($value->user_id == Auth::id() AND $value->starred){
                    $data[] = $value;
                }
            }
            return DataTables::of($data)
                ->addColumn('checkbox', function($data){
                    return '<div class="custom-control custom-checkbox mb-3"><input type="checkbox" class="custom-control-input" id="email-'.$data->id.'"><label class="custom-control-label" for="email-'.$data->id.'"></label></div>';
                })
                ->addColumn('stared', function($data){
                    $cls='';
                    if (!$data->read) $cls='text-dark font-weight-bold';
                    $url = route('user.mailbox.dislike',['id'=>$data->id]);
                    return '<a href="'.$url.'" class="star stared"> <i class="fa text-warning fa-star"></i> </a> <a class="'.$cls.'" href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->type.'</a>';
                })
                ->addColumn('subject', function($data){
                    $cls='';
                    if (!$data->read) $cls='text-dark font-weight-bold';
                    return '<a class="'.$cls.'" href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->subject.'</a>';
                })
                ->addColumn('created_at', function($data){
                    return '<div class="text-right">'.$data->created_at.'</div>';
                })
                ->rawColumns(['checkbox','stared','subject','created_at'])
                ->toJson();
        }
    	return view('mailbox.starred');
    }
    public function draft(Request $request){
        $data = array();
        if($request->ajax()) {
            $query = DB::table('mailboxes')->join('mailbox_user','mailboxes.id','=','mailbox_user.mailbox_id')->get();
            foreach ($query as $value){
                if ($value->user_id == Auth::id() AND $value->status=='draft'){
                    $data[] = $value;
                }
            }
            return DataTables::of($data)
                ->addColumn('checkbox', function($data){
                    return '<div class="custom-control custom-checkbox mb-3"><input name="emails[]" value="'.$data->id.'" type="checkbox" class="custom-control-input" id="email-'.$data->id.'"><label class="custom-control-label" for="email-'.$data->id.'"></label></div>';
                })
                ->addColumn('stared', function($data){
                    if (!$data->read) $cls='';
                    if ($data->starred) {
                        $starred='text-warning fa-star';
                        $url = route('user.mailbox.dislike',['id'=>$data->id]);
                    }
                    else {
                        $starred='fa-star-o';
                        $url = route('user.mailbox.like',['id'=>$data->id]);
                    }
                    return '<a href="'.$url.'" class="star stared"> <i class="fa '.$starred.'"></i> </a> <a class="'.$cls.'" href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->type.'</a>';
                })
                ->addColumn('subject', function($data){
                    if (!$data->read) $cls='';
                    return '<a class="'.$cls.'" href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->subject.'</a>';
                })
                ->addColumn('created_at', function($data){
                    return '<div class="text-right">'.$data->created_at.'</div>';
                })
                ->rawColumns(['checkbox','stared','subject','created_at'])
                ->toJson();
        }
        return view('mailbox.draft');
    }
    public function spam(Request $request){
        $data = array();
        if($request->ajax()) {
            $query = DB::table('mailboxes')->join('mailbox_user','mailboxes.id','=','mailbox_user.mailbox_id')->get();
            foreach ($query as $value){
                if ($value->user_id == Auth::id() AND $value->status=='spam'){
                    $data[] = $value;
                }
            }
            return DataTables::of($data)
                ->addColumn('checkbox', function($data){
                    return '<div class="custom-control custom-checkbox mb-3"><input name="emails[]" value="'.$data->id.'" type="checkbox" class="custom-control-input" id="email-'.$data->id.'"><label class="custom-control-label" for="email-'.$data->id.'"></label></div>';
                })
                ->addColumn('stared', function($data){
                    $cls='';
                    if (!$data->read) $cls='text-dark font-weight-bold';
                    if ($data->starred) {
                        $starred='text-warning fa-star';
                        $url = route('user.mailbox.dislike',['id'=>$data->id]);
                    }
                    else {
                        $starred='fa-star-o';
                        $url = route('user.mailbox.like',['id'=>$data->id]);
                    }
                    return '<a href="'.$url.'" class="star stared"> <i class="fa '.$starred.'"></i> </a> <a class="'.$cls.'" href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->type.'</a>';
                })
                ->addColumn('subject', function($data){
                    $cls='';
                    if (!$data->read) $cls='text-dark font-weight-bold';
                    return '<a class="'.$cls.'" href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->subject.'</a>';
                })
                ->addColumn('created_at', function($data){
                    return '<div class="text-right">'.$data->created_at.'</div>';
                })
                ->rawColumns(['checkbox','stared','subject','created_at'])
                ->toJson();
        }
        return view('mailbox.spam');
//    	return view('mailbox.index')->with('data',$data);
    }
    public function trash(Request $request){
        $data = array();
        if($request->ajax()) {
            $query = DB::table('mailboxes')->join('mailbox_user','mailboxes.id','=','mailbox_user.mailbox_id')->get();
            foreach ($query as $value){
                if ($value->user_id == Auth::id() AND $value->status=='trash'){
                    $data[] = $value;
                }
            }
            return DataTables::of($data)
                ->addColumn('checkbox', function($data){
                    return '<div class="custom-control custom-checkbox mb-3"><input name="emails[]" value="'.$data->id.'" type="checkbox" class="custom-control-input" id="email-'.$data->id.'"><label class="custom-control-label" for="email-'.$data->id.'"></label></div>';
                })
                ->addColumn('stared', function($data){
                    $cls='';
                    if (!$data->read) $cls='text-dark font-weight-bold';
                    if ($data->starred) {
                        $starred='text-warning fa-star';
                        $url = route('user.mailbox.dislike',['id'=>$data->id]);
                    }
                    else {
                        $starred='fa-star-o';
                        $url = route('user.mailbox.like',['id'=>$data->id]);
                    }
                    return '<a href="'.$url.'" class="star stared"> <i class="fa '.$starred.'"></i> </a> <a class="'.$cls.'" href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->type.'</a>';
                })
                ->addColumn('subject', function($data){
                    $cls='';
                    if (!$data->read) $cls='text-dark font-weight-bold';
                    return '<a class="'.$cls.'" href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->subject.'</a>';
                })
                ->addColumn('created_at', function($data){
                    return '<div class="text-right">'.$data->created_at.'</div>';
                })
                ->rawColumns(['checkbox','stared','subject','created_at'])
                ->toJson();
        }
    	return view('mailbox.trash');
    }
    public function show($id){
        DB::table('mailbox_user')
            ->where('mailbox_id', $id)
            ->where('user_id', Auth::id())
            ->update(['read' => 1]);
        $email = Mailbox::findOrFail($id);
        $children = '';
        if ($email->parent){
            $children = DB::table('mailboxes')->where('parent',$email->parent)->get();
            $email = Mailbox::findOrFail($email->parent);
        } else {
            $children = DB::table('mailboxes')->where('parent',$id)->get();
        }
        if ($children){
            foreach ($children as $child){
                DB::table('mailbox_user')
                    ->where('mailbox_id', $child->id)
                    ->where('user_id', Auth::id())
                    ->update(['read' => 1]);
            }
        }
    	return view('mailbox.show')->with('email',$email)->with('children', $children);
    }
    public function sent(Request $request){
        // $emails = Mailbox::where('user_id',Auth::id())->latest()->get();
    	// return view('mailbox.sent')->with('emails',$emails);
        if($request->ajax()) {
            $data = Mailbox::where('user_id',Auth::id())->latest()->get();
            return DataTables::of($data)
                ->addColumn('checkbox', function($data){
                    return '<div class="custom-control custom-checkbox mb-3"><input type="checkbox" class="custom-control-input" id="email-'.$data->id.'"><label class="custom-control-label" for="email-'.$data->id.'"></label></div>';
                })
                ->addColumn('stared', function($data){
                    return '<a href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->type.'</a>';
                })
                ->addColumn('subject', function($data){
                    return '<a href="'.route('user.mailbox.show',['id'=>$data->id]).'">'.$data->subject.'</a>';
                })
                ->addColumn('created_at', function($data){
                    return '<div class="text-right">'.$data->created_at->diffForHumans().'</div>';
                })
                ->rawColumns(['checkbox','stared','subject','created_at'])
                ->make(true);
        }
        return view('mailbox.sent');
    }
    public function mailmanagement(Request $request){
        // dd($request->all());
        if($request->emails) {
            if ($request->mailmanagement == 'Report spam') {
                foreach ($request->emails as $id){
                    DB::table('mailbox_user')->where('mailbox_id', $id)->where('user_id', Auth::id())->update(['status' => 'spam']);
                }
            }
            elseif ($request->mailmanagement == 'Not spam' OR $request->mailmanagement == 'Restore') {
                foreach ($request->emails as $id){
                    DB::table('mailbox_user')->where('mailbox_id', $id)->where('user_id', Auth::id())->update(['status' => 'inbox']);
                }
            }
            elseif ($request->mailmanagement == 'Delete') {
                foreach ($request->emails as $id){
                    DB::table('mailbox_user')->where('mailbox_id', $id)->where('user_id', Auth::id())->update(['status' => 'trash']);
                }
            }
            elseif ($request->mailmanagement == 'Delete Permanently') {
                foreach ($request->emails as $id){
                    DB::table('mailbox_user')->where('mailbox_id', $id)->where('user_id', Auth::id())->delete();
                }
            }
            elseif ($request->mailmanagement == 'Mark as read') {
                foreach ($request->emails as $id){
                    DB::table('mailbox_user')->where('mailbox_id', $id)->where('user_id', Auth::id())->update(['read' => 1]);
                }
            }
        }
        return redirect()->back();
    }
}
