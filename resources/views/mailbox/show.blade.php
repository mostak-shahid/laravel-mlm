@extends('layouts.backend')

@section('page-title')
Mailbox
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
<div class="x_panel">
    <div class="x_content">
        <div class="row">
            @include('mailbox.menu')
            <!-- CONTENT MAIL -->
            <div class="col-sm-9 mail_view">
                <div class="inbox-body">

                    <form action="{{route('user.mailbox.mailmanagement')}}" method="POST">
                        @csrf
                        <div class="mail_heading row">
                            <div class="col-md-8">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-primary btn-reply" type="button"><i class="fa fa-reply"></i> Reply</button>
                                    <button class="btn btn-default" type="submit" name="mailmanagement" value="Report spam" data-placement="top" data-toggle="tooltip" data-original-title="Report spam"><i class="fa fa-exclamation-circle"></i></button>
                                    <button class="btn btn-default" type="submit" name="mailmanagement" value="Delete" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <p class="date"> {{$email->created_at}}</p>
                            </div>
                            <div class="col-md-12">
                                <h4 class="email-subject"> {{$email->subject}}</h4>
                            </div>
                        </div>
                        <div class="sender-info">
                            <div class="row">
                                <div class="col-md-12">
                                    @if($email->user_id == Auth::id())
                                        <strong>Me</strong>
                                    @else
                                        <strong>{{App\User::find($email->user_id)->name}}</strong>
                                        <span>({{App\User::find($email->user_id)->email}})</span>
                                    @endif
                                        to
                                    @php($receivers = DB::table('mailbox_user')->where('mailbox_id',$email->id)->get())
                                    @foreach($receivers as $receiver)
                                        @if($receiver->user_id == Auth::id())
                                            <strong>Me</strong>
                                        @else
                                            <strong>{{App\User::find($receiver->user_id)->name}}</strong> <span>({{App\User::find($receiver->user_id)->email}})</span>
                                        @endif
                                    @endforeach
                                    <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="view-mail">
                            {!! $email->message !!}
                            @if($children)
                                @foreach($children as $child)
                                    <hr>
                                    <div class="sender-info">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if($child->user_id == Auth::id())
                                                    <strong>Me</strong>
                                                @else
                                                    <strong>{{App\User::find($child->user_id)->name}}</strong>
                                                    <span>({{App\User::find($child->user_id)->email}})</span>
                                                @endif
                                                to
                                                @php($receivers = DB::table('mailbox_user')->where('mailbox_id',$child->id)->get())
                                                @foreach($receivers as $receiver)
                                                    @if($receiver->user_id == Auth::id())
                                                        <strong>Me</strong>
                                                    @else
                                                        <strong>{{App\User::find($receiver->user_id)->name}}</strong> <span>({{App\User::find($receiver->user_id)->email}})</span>
                                                    @endif
                                                @endforeach
                                                <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view-mail">
                                        {!! $child->message !!}
                                    </div>

                                @endforeach
                            @endif
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-primary btn-reply" type="button"><i class="fa fa-reply"></i> Reply</button>
                            <button class="btn btn-default" type="submit" name="mailmanagement" value="Report spam" data-placement="top" data-toggle="tooltip" data-original-title="Report spam"><i class="fa fa-exclamation-circle"></i></button>
                            <button class="btn btn-default" type="submit" name="mailmanagement" value="Delete" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <input type="hidden" name="emails[]" value="{{$email->id}}">
                    </form>

                    <div class="hide-on-load mt-3">
                        <form method="post" action="{{ route('user.mailbox.store') }}" id="email-form" data-parsley-validate>
                            @csrf
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control editor"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm">Send Message</button>
                            <input type="hidden" name="subject" value="Reply to: {{$email->subject}}">
                            <input type="hidden" name="parent" value="{{$email->id}}">
                            <input type="hidden" name="type" value="Internal Mail">
                            <input type="hidden" name="members[]" value="{{$email->user_id}}">
                        </form>
                    </div>
                </div>
            </div><!-- /CONTENT MAIL -->
        </div>
    </div>
</div>
@endsection
@section('script')
    <!-- ckeditor -->
    <script src="{{ asset('admin/vendors/ckeditor4-major/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/vendors/ckeditor4-major/adapters/jquery.js') }}"></script>
    <script>
        jQuery(document).ready(function($){
            $('.editor').ckeditor({
                toolbar:
                        [
                            ['Styles','Format', 'Font', 'FontSize'],
                            '/',
                            ['Bold','Italic','Underline','Strike','Subscript','Superscript','-','CopyFormatting','RemoveFormat'],
                            ['BulletedList','NumberedList','-','Indent','Outdent','-','Blockquote'],
                            ['Link','Unlink','Anchor'],
                            ['Table','HorizontalRule','Smiley','SpecialChar'],
                        ]// https://ckeditor.com/old/forums/CKEditor/Complete-list-of-toolbar-items
            });
            $(window).load(function(){
                $('.hide-on-load').hide();
            });
            $('.btn-reply').click(function(e){
                e.preventDefault();
                $('.hide-on-load').slideDown();
            });
        });
    </script>
@endsection
