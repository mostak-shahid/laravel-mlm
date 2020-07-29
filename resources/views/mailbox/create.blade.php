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
                    <form method="post" action="{{ route('user.mailbox.store') }}" id="email-form" data-parsley-validate>
                        @csrf
                        <div class="form-group">
                            <label for="subject">Subject <span class="text-danger">*</span></label>
                            <input type="text" id="subject" class="form-control" name="subject" required />
                        </div>
                        <div class="form-group">
                            <label for="subject">Type</label>
                            <div class="radio-inline">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="type-admin" name="type" class="custom-control-input" value="Admin" checked>
                                    <label class="custom-control-label" for="type-admin">Admin</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="type-team" name="type" class="custom-control-input" value="My Team">
                                    <label class="custom-control-label" for="type-team">My Team</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="type-internal" name="type" class="custom-control-input" value="Internal Mail">
                                    <label class="custom-control-label" for="type-internal">Internal Mail</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="type-external" name="type" class="custom-control-input" value="External Mail">
                                    <label class="custom-control-label" for="type-external">External Mail</label>
                                </div>                                 
                            </div>        
                        </div>
                        <div id="members-group" class="form-group">
                            <select name="members[]" id="members" class="form-control select2_multiple" multiple>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>        
                        </div>
                        <div id="to-group" class="form-group position-relative has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="to" name="to" placeholder="user@example.com">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true" style="margin-left: -10px"></span>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control editor"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Send Message</button>
                        <input type="hidden" value="0" name="parent">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('style')
    <!-- Select2 -->
    <link href="{{ asset('admin/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('script')
    <!-- Select2 -->
    <script src="{{ asset('admin/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- ckeditor -->
    <script src="{{ asset('admin/vendors/ckeditor4-major/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/vendors/ckeditor4-major/adapters/jquery.js') }}"></script>
    <!-- Parsley -->
    <script src="{{ asset('admin/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <script>
    jQuery(document).ready(function($){
        $(".select2_multiple").select2({
            // maximumSelectionLength: 4,
            placeholder: "You can select multiple members.",
            allowClear: true
        });
        $('#members-group,#to-group').hide();
        $("input[name='type']").change(function(){
            var type = $("input[name='type']:checked").val();
            if(type == 'Internal Mail'){
                $('#members-group').show().find('select').prop('required',true);
                $('#to-group').hide().find('input').prop('required',false);
            } else if(type == 'External Mail'){
                $('#members-group').hide().find('select').prop('required',false);
                $('#to-group').show().find('input').prop('required',true);
            } else{
                $('#members-group').hide().find('select').prop('required',false);
                $('#to-group').hide().find('input').prop('required',false);
            }
        });
        /*
        var radioValue = $("input[name='gender']:checked").val();
        */
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
        $('#email-form').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        });
        /*.on('form:submit', function() {
            return false; // Don't submit form for this demo
        });*/
        //https://parsleyjs.org/doc/examples.html

    });
    </script>
@endsection