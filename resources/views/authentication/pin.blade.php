@extends('layouts.backend')

@section('page-title')
		Change Transaction Password
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
<div class="x_panel">
    <div class="x_content">
        <ul class="nav nav-tabs bar_tabs" id="passwordTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="change-tab" data-toggle="tab" href="#change" role="tab" aria-controls="change" aria-selected="true">Change Transaction Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="forgot-tab" data-toggle="tab" href="#forgot" role="tab" aria-controls="forgot" aria-selected="false">Forgot Transaction Password</a>
            </li>
        </ul>
        <div class="tab-content" id="passwordTabContent">
            <div class="tab-pane fade show active" id="change" role="tabpanel" aria-labelledby="change-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <form>
                            <div class="form-group">
                                <label for="password">Current Password <span class="text-danger">*</span></label><br/>
                                <input type="password" class="form-control mr-2" name="password" id="password" required>
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password <span class="text-danger">*</span></label><br/>
                                <input type="password" class="form-control mr-2" name="new_password" id="new_password" required>
                            </div>
                            <div class="form-group">
                                <label for="con_password">Confirm Password <span class="text-danger">*</span></label><br/>
                                <input type="password" class="form-control mr-2" name="con_password" id="con_password" required>
                            </div>
                            <button type="submit" class="btn btn-success mr-0 mb-0">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="forgot" role="tabpanel" aria-labelledby="forgot-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <form>
                            <div class="form-group">
                                <label for="password">Current Password <span class="text-danger">*</span></label><br/>
                                <input type="password" class="form-control mr-2" name="password" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-success mr-0 mb-0">Send Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
