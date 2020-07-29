@extends('layouts.backend')

@section('page-title')
    Payout Status
@endsection
@section('sidebar')
    @include('user.menu')
@endsection
@section('content')
    <div class="x_panel mb-30">
        <ul class="list-inline mb-0">
            <li class="list-inline-item text-center p-3">
                <span class="d-block font-weight-bold">Pending Requests</span>
                <span class="d-block text-warning"> 0.00 </span>
            </li>
            <li class="list-inline-item text-center p-3">
                <span class="d-block font-weight-bold">Approved - Pending Payment</span>
                <span class="d-block text-info"> 0.00 </span>
            </li>
            <li class="list-inline-item text-center p-3">
                <span class="d-block font-weight-bold">Approved - Paid</span>
                <span class="d-block text-success"> 234,427.00 </span>
            </li>
            <li class="list-inline-item text-center p-3">
                <span class="d-block font-weight-bold">Rejected Requests</span>
                <span class="d-block text-danger"> 0.00 </span>
            </li>
        </ul>
    </div>
    <div class="x_panel mb-30">
        <ul class="nav nav-tabs bar_tabs" id="payoutTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pending-tab" data-toggle="tab" href="#pending" role="tab" aria-controls="pending" aria-selected="true">Pending Requests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="approve-pending-tab" data-toggle="tab" href="#approve-pending" role="tab" aria-controls="approve-pending" aria-selected="false">Approved - Pending Payment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="approve-paid-tab" data-toggle="tab" href="#approve-paid" role="tab" aria-controls="approve-paid" aria-selected="false">Approved - Paid</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="rejected-tab" data-toggle="tab" href="#rejected" role="tab" aria-controls="rejected" aria-selected="false">Rejected Requests</a>
            </li>
        </ul>
        <div class="tab-content" id="payoutTabContent">
            <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                <h4 class="text-center">No Pending Requests records found</h4>
            </div>
            <div class="tab-pane fade" id="approve-pending" role="tabpanel" aria-labelledby="approve-pending-tab">
                <h4 class="text-center">No Approved - Pending Payment records found</h4>
            </div>
            <div class="tab-pane fade" id="approve-paid" role="tabpanel" aria-labelledby="approve-paid-tab">
                <h4 class="text-center">No Approved - Paid records found</h4>
            </div>
            <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected-tab">
                <h4 class="text-center">No Rejected Requests records found</h4>
            </div>
        </div>
    </div>
@endsection
