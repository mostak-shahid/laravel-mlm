@extends('layouts.backend')

@section('page-title')
    Profile View of INF857335
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
    <div class="x_panel">
        <div class="x_content">
            <img class="img-fluid profile-bg" src="{{ asset('images/profile-banner.jpg') }}" alt="Profile image example"/>
            <div class="profile-text">
                <img class="img-thumbnail rounded-circle mx-auto d-block" src="{{ asset('admin/production/images/img.jpg') }}" alt="Profile image example"/>
                <h1>{{ Auth::user()->name }}</h1>
                <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="x_panel">
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>Username</td>
                                <td class="text-right">INF750391</td>
                            </tr>
                            <tr>
                                <td>Placement Username</td>
                                <td class="text-right">Georgh Whitman</td>
                            </tr>
                            <tr>
                                <td>Sponsor Name</td>
                                <td class="text-right">Georgh Whitman</td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td class="text-right">Left</td>
                            </tr>
                            <tr>
                                <td>Package</td>
                                <td class="text-right">Bronze</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="x_panel">
                <div class="x_content">
                    <ul class="nav nav-tabs bar_tabs" id="profileTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Information</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="profileTabContent">
                        <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                            <form action="">
                                <div class="form-group">
                                    <label for="name">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" data-parsley-pattern="/^[a-z .'-]+$/i" data-parsley-pattern-message="Only alphabets are allowed." required />
                                </div>
                                <div class="form-group">
                                    <label for="email">Cell Number</label>
                                    <input type="tel" class="form-control" name="email" />
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <div class='input-group date' id='myDatepicker2'>
                                        <input type='text' name="dob" class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="fa fa-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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
        </div>
    </div>
@endsection
@section('style')
    <style>
        .profile-text{
            position: relative;
            z-index: 2;
            margin-top: -70px;
            text-align: center;
        }
    </style>
@endsection