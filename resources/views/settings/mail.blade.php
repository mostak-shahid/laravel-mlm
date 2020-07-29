@extends('layouts.backend')

@section('page-title')
    Mail Settings
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')

    <div class="x_panel">
        <form>
            <div class="form-group">
                <label class="required">Mail Type</label>
                <select class="form-control" name="reg_mail_type" id="reg_mail_type">
                    <option value="normal" selected="">Normal(Send mail)</option>
                    <option value="smtp">SMTP</option>
                </select>
            </div>
            <div id="pair" style="display: none;">
                <div class="form-group">
                    <label class="required">SMTP Authentication</label>
                    <select class="form-control" name="smtp_auth_type">
                        <option value="1" selected="">Enabled</option>
                        <option value="0">Disabled</option>
                    </select>


                </div>
                <div class="form-group">
                    <label class="required">Prefix for secure protocol to connect to the server</label>
                    <select class="form-control" name="smtp_protocol">
                        <option value="tls" selected="">TLS</option>
                        <option value="ssl">SSL</option>
                        <option value="none">None</option>
                    </select>


                </div>
                <div class="form-group">
                    <label class="required">SMTP Host</label>
                    <input type="text" class="form-control" name="smtp_host" id="smtp_host" value="mail.ioss.in">

                </div>
                <div class="form-group">
                    <label class="required">SMTP Username</label>
                    <input type="text" class="form-control" name="smtp_username" id="smtp_username" value="iossmlm@ioss.in">

                </div>
                <div class="form-group">
                    <label class="required">SMTP Password</label>
                    <input type="password" class="form-control" name="smtp_password" id="smtp_password" value="ceadecs001">

                </div>
                <div class="form-group">
                    <label class="required">SMTP Port</label>
                    <input type="text" class="form-control" name="smtp_port" id="smtp_port" value="25" maxlength="5">

                </div>
                <div class="form-group">
                    <label class="required">SMTP Timeout</label>
                    <input type="text" class="form-control" name="smtp_timeout" id="smtp_timeout" value="360" maxlength="5">

                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success" name="update" type="submit" value="update">Update</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        jQuery(document).ready(function($){
            $('#reg_mail_type').change(function(){
                if($('#reg_mail_type').val() == 'smtp'){
                    $('#pair').show();
                } else {
                    $('#pair').hide();
                }
            });
        });
    </script>
@endsection