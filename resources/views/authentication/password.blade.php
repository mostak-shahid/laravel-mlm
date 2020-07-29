@extends('layouts.backend')

@section('page-title')
    Change Login Password
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
<div class="x_panel">
    <div class="x_content">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <form>
                    <div class="form-group">
                        <label for="password">Current Password <span class="tect-danger">*</span></label><br/>
                        <input type="password" class="form-control mr-2" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Password <span class="tect-danger">*</span></label><br/>
                        <input type="password" class="form-control mr-2" name="new_password" id="new_password" required>
                    </div>
                    <div class="form-group">
                        <label for="con_password">Confirm Password <span class="tect-danger">*</span></label><br/>
                        <input type="password" class="form-control mr-2" name="con_password" id="con_password" required>
                    </div>
                    <button type="submit" class="btn btn-success mr-0 mb-0">Update Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
