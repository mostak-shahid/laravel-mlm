            @php($name = Route::currentRouteName())
            <div class="col-sm-3 mail_list_column">
                <a href="{{ route('user.mailbox.compose')}}" id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($name == 'user.mailbox.index') active @endif"><a class="text-black active" href="{{ route('user.mailbox.index') }}">Inbox</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($name == 'user.mailbox.starred') active @endif"><a class="text-black" href="{{ route('user.mailbox.starred') }}">Starred</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($name == 'user.mailbox.sent') active @endif"><a class="text-black" href="{{ route('user.mailbox.sent') }}">Sent</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($name == 'user.mailbox.draft') active @endif"><a class="text-black" href="{{ route('user.mailbox.draft') }}">Drafts</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($name == 'user.mailbox.spam') active @endif"><a class="text-black" href="{{ route('user.mailbox.spam') }}">Spam</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($name == 'user.mailbox.trash') active @endif"><a class="text-black" href="{{ route('user.mailbox.trash') }}">Trash</a></li>
                </ul>
            </div>
            <!-- /MAIL LIST -->