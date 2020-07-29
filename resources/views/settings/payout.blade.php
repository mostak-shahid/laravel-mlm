@extends('layouts.backend')

@section('page-title')
    Payout Settings
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')

    <div class="x_panel">
        <form>
            <div class="form-group">
                <label class="required">Minimum Payout Amount</label>
                <input type="text" class="form-control" name="min_payout" id="payout_amount_min" value="1000">
            </div>
            <div class="form-group">
                <label class="required">Maximum Payout Amount</label>
                <input type="text" class="form-control" name="max_payout" id="payout_amount_max" value="27000">
            </div>
            <div class="form-group">
                <label class="required">Payout Fee</label>
                <select class="form-control" name="payout_fee_mode" id="payout_fee_mode" "="">
                <option value="percentage">Percentage</option>
                <option value="flat" selected="true">Flat</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="payout_fee_amount" id="payout_fee_amount" value="0">
            </div>
            <div class="form-group">
                <label class="required">Payout Request Validity (days)</label>
                <input type="text" class="form-control" name="payout_validity" id="payout_amount" value="14" maxlength="5">
            </div>
            <div class="form-group">
                <label class="required">Payout Method</label>
                <select class="form-control" name="payout_status" id="payout_status">
                    <option value="from_ewallet">Manual Payout by Admin</option>
                    <option value="ewallet_request">Payout by User Request</option>
                    <option value="both" selected="">Both Manual Payout and by User Request</option>
                </select>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label class="i-checks">
                        <input type="checkbox" name="mail_status"><i></i> Enable payout mail status
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" value="Update" name="setting" id="setting">Update</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        jQuery(document).ready(function($){});
    </script>
@endsection