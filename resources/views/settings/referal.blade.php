@extends('layouts.backend')

@section('page-title')
    Referral Commissions Settings
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')

    <div class="x_panel">
        <form>
            <div class="form-group">
                <label class="required control-label">Type of Commission</label>
                <select class="form-control" name="referal_commission_type" id="referal_commission_type_new" onchange="change_referal_commission_type(this.value);">
                    <option value="percentage">Percentage</option>
                    <option value="flat" selected="true">Flat</option>
                </select>
            </div>
            <div class="form-group">
                <label class="required">Referral Commission Criteria</label>
                <select class="form-control" name="sponsor_commission_type" id="sponsor_commission_type">
                    <option value="joinee_package">Based on Joinee Package </option>
                    <option value="sponsor_package" selected="">Based on Sponsor Package </option>
                </select>
            </div>
            <div id="referal_rank_div" style="display: none;">
            </div>
            <div id="referal_package_div">
                <div class="form-group">
                    <label class="required">
                        Referral Commission - Bronze
                        <span class="span_referal_commission"></span>
                    </label>
                    <input type="text" maxlength="5" class="level_percentage form-control" name="pck_referal1">
                </div>
                <div class="form-group">
                    <label class="required">
                        Referral Commission - Silver
                        <span class="span_referal_commission"></span>
                    </label>
                    <input type="text" maxlength="5" class="level_percentage form-control" name="pck_referal2" data-lang="You must enter Silver Referral Commission" id="pck_referal2" min="0" value="100.00">
                </div>
                <div class="form-group">
                    <label class="required">
                        Referral Commission - Membership Pack 3
                    </label>
                    <input type="text" maxlength="5" class="level_percentage form-control" name="pck_referal3" data-lang="You must enter Membership Pack 3 Referral Commission" id="pck_referal3" min="0" value="15.00">
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit" value="Update" id="referral_setting">Update</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        jQuery(document).ready(function($){});
    </script>
@endsection