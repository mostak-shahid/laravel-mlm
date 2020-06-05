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
            <div class="col-sm-3 mail_list_column">                
                <a href="{{ route('user.mailbox.compose')}}" id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.index') }}">Inbox</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.starred') }}">Starred</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.sent') }}">Sent</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.draft') }}">Drafts</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.spam') }}">Spam</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.trash') }}">Trash</a></li>
                </ul>
            </div>
            <!-- /MAIL LIST -->

            <!-- CONTENT MAIL -->
            <div class="col-sm-9 mail_view">
                <div class="inbox-body">
                    <form id="email-form" data-parsley-validate>
                        @csrf
                        <div class="form-group">
                            <label for="subject">Subject <span class="text-danger">*</span></label>
                            <input type="text" id="subject" class="form-control" name="subject" required />         
                        </div>
                        <div class="form-group">
                            <label for="subject">Type</label>
                            <div class="radio-inline">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="type-admin" name="type" class="custom-control-input" value="admin" checked>
                                    <label class="custom-control-label" for="type-admin">Admin</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="type-team" name="type" class="custom-control-input" value="team">
                                    <label class="custom-control-label" for="type-team">My Team</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="type-internal" name="type" class="custom-control-input" value="internal">
                                    <label class="custom-control-label" for="type-internal">Internal Mail</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="type-external" name="type" class="custom-control-input" value="external">
                                    <label class="custom-control-label" for="type-external">External Mail</label>
                                </div>                                 
                            </div>        
                        </div>
                        <div class="form-group">
                            <select name="members[]" id="members" class="form-control select2_multiple" multiple>
                                <option value="3">Md. Shahid Apu</option>
                                <option value="2">Md. Mostak Apu</option>
                                <option value="1">Md. Mostak Shahid</option>
                            </select>        
                        </div>
                        <div class="form-group position-relative has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="to" name="to" placeholder="user@example.com">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true" style="margin-left: -10px"></span>
                        </div>
                        <div class="form-group">
                            <textarea name="body" id="body" class="form-control editor"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Send Message</button>
                    </form>
                </div>
            </div>
@endsection
@section('style')
    <!-- Select2 -->
    <link href="{{ asset('admin/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('admin/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
@endsection
@section('script')
    <!-- Select2 -->
    <script src="{{ asset('admin/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('admin/vendors/google-code-prettify/src/prettify.js') }}"></script>
    <!-- Parsley -->
    <script src="{{ asset('admin/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <script>
    jQuery(document).ready(function($){
        $(".select2_multiple").select2({
            // maximumSelectionLength: 4,
            placeholder: "You can select multiple members.",
            allowClear: true
        });
        $('.editor').wysiwyg();
        $('#email-form').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
        .on('form:submit', function() {
            return false; // Don't submit form for this demo
        });
        //https://parsleyjs.org/doc/examples.html

    });
    </script>
@endsection