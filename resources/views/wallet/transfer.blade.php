@extends('layouts.backend')

@section('page-title')
    Fund Transfer
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
<div class="x_panel">
    <div class="x_content">
        <div class="row justify-content-md-center">
            <div class="col-lg-4">
                <form class="transfer-form">
                    <div class="form-group">
                        <label for="username">Transfer To (Username) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="username" data-parsley-type="alphanum" required />
                    </div>
                    <div class="form-group">
                        <label>Available Amount</label>
                        <input class="form-control" type="text" id="avb_amount" name="avb_amount" readonly value="9745.9" autocomplete="Off">
                    </div>
                    <div class="form-group">
                        <label for="amount">Available Amount <span class="text-danger">*</span></label>
                        <input class="form-control" type="number" id="amount" name="amount" min="1" max="9745.9" required>
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="notes" id="notes" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="fee">Transaction Fee</label>
                        <input class="form-control" type="text" id="fee" name="fee" readonly value="0">
                    </div>
                    <div class="form-group">
                        <label for="password">Transaction Password <span class="text-danger">*</span></label>
                        <input class="form-control" type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-success">Transfer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
