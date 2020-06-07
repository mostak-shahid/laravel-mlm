@extends('layouts.backend')

@section('page-title')
Rank Performance Report
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
<div class="x_panel">
    <div class="x_content">
        <div id="printThis" class="">
            <img src="{{ asset('images/mos-icon.png') }}" class="img-fluid mb-2" alt="Company Name" width="60px" height="60px">
            <h4>Company Name</h4>
            <p>Company address<br>
            Phone: 9999999999<br> 
            email:companyname@emil.com </p>

            <div class="text-center">                
                <h2>Rank Details</h2>
                <h3>Current Rank : Platinum</h3>
                <h4>Next Rank : NA</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr class="text">
                            <td><strong>Username</strong></td>
                            <td>INF170549</td>
                        </tr>
                        <tr>
                            <td><strong> Current Rank</strong></td>
                            <td>Platinum</td>
                        </tr>
                        <tr>
                            <td><strong>Next Rank</strong></td>
                            <td>NA</td>
                        </tr>
                        <tr>
                            <td><strong>Current Referral Count</strong></td>
                            <td>22</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="btn btn-sm btn-primary btn-print"><i class="fa fa-print"></i> | Print</button>
    </div>
</div>
@endsection
