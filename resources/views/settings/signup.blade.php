@extends('layouts.backend')

@section('page-title')
    Signup Settings
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6 mb-30">
            <div class="x_panel h-100">
                <div class="x_title">
                    <h2>Signup Settings</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label custom-checkbox-success" for="customCheck1">Block User Registration</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label custom-checkbox-success" for="customCheck2">Always Set Admin as Sponsor Username</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label custom-checkbox-success" for="customCheck3">Enable Mail Notification</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label custom-checkbox-success" for="customCheck4">Enable Binary Position(Leg) Locking</label>
                            </div>
                        </div>
                        <div class="form-group" style="display: block;">
                            <label class="required">Position to Lock</label>
                            <select class="form-control" name="binary_leg">
                                <option value="left">Left Leg</option>
                                <option value="right">Right Leg</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label custom-checkbox-success" for="customCheck5">Enable Age Restriction</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label custom-checkbox-success" for="customCheck6">Enable Email Verification</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label custom-checkbox-success" for="customCheck7">Enable Unapproved User Login</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="required">Minimum Age Required</label>
                            <input type="text" class="form-control" name="age_limit" maxlength="3" value="18">
                        </div>

                        <button type="submit" id="update_signup" value="update" name="update_signup" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-30">
            <div class="x_panel h-100">

                <div class="x_title">
                    <h2>Username Settings</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form>

                        <div class="form-group">
                            <label class="required">Username Type</label>
                            <select class="form-control" name="user_name_type">
                                <option value="static" selected="">Static</option>
                                <option value="dynamic">Dynamic</option>
                            </select>
                        </div>
                        <div class="form-group" id="length_div" style="">
                            <label class="required">Username Length</label>
                            <input type="text" class="form-control" name="length" id="length" value="6" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                        </div>
                        <div class="form-group" id="prefix_status_div" style="">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                <label class="custom-control-label custom-checkbox-success" for="customCheck10">Enable Username Prefix</label>
                            </div>
                        </div>

                        <div class="form-group" id="prefix_div" style="display: block;">
                            <label class="required">Username Prefix</label>
                            <input type="text" class="form-control" name="prefix" id="prefix" value="bmwc" maxlength="8" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" value="update" name="update" id="update">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        jQuery(document).ready(function($){

        });
    </script>
@endsection