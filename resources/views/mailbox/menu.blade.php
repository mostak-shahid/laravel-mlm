
@php
    $name = Route::currentRouteName();
    $starred = $icount = $dcount = $scount = $tcount = 0;
    $query = DB::table('mailboxes')->join('mailbox_user','mailboxes.id','=','mailbox_user.mailbox_id')->get();
    foreach ($query as $value){
        if ($value->user_id == Auth::id()){
            if ($value->starred){
                $starred++;
            }
            if ($value->status=='inbox' AND !$value->read){
                $icount++;
            }
            elseif ($value->status=='draft'){
                $dcount++;
            }
            elseif ($value->status=='spam'){
                $scount++;
            }
            elseif ($value->status=='trash'){
                $tcount++;
            }
        }
    }

@endphp

            <div class="col-sm-3 mail_list_column">
                <a href="{{ route('user.mailbox.compose')}}" id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($name == 'user.mailbox.index') active @endif"><a class="text-black active" href="{{ route('user.mailbox.index') }}">Inbox</a> <span class="badge badge-primary badge-pill">{{$icount}}</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($name == 'user.mailbox.starred') active @endif"><a class="text-black" href="{{ route('user.mailbox.starred') }}">Starred</a> <span class="badge badge-primary badge-pill">{{$starred}}</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($name == 'user.mailbox.sent') active @endif"><a class="text-black" href="{{ route('user.mailbox.sent') }}">Sent</a> <span class="badge badge-primary badge-pill">{{App\Mailbox::where('user_id',Auth::id())->get()->count()}}</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($name == 'user.mailbox.spam') active @endif"><a class="text-black" href="{{ route('user.mailbox.spam') }}">Spam</a> <span class="badge badge-primary badge-pill">{{$scount}}</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($name == 'user.mailbox.trash') active @endif"><a class="text-black" href="{{ route('user.mailbox.trash') }}">Trash</a><span class="badge badge-primary badge-pill">{{$tcount}}</span></li>
                </ul>
            </div>
            <!-- /MAIL LIST -->