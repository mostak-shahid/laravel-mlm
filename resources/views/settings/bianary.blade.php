@extends('layouts.backend')

@section('page-title')
    Binary Commission Settings
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')

    <div class="x_panel">
        <form>
            <div class="form-row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="calculation_criteria">Calculation Criteria <span class="text-danger">*</span></label>
                        <select class="form-control" name="calculation_criteria" id="calculation_criteria" required>
                            <option value="sales_volume" selected>Binary Commission based on Sales Volume</option>
                            <option value="sales_price">Binary Commission based on Sales Price</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="required">Calculation Period</label>
                        <select class="form-control" name="calculation_period" id="calculation_period">
                            <option value="instant" selected>Instant</option>
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="required">Pair Type</label>
                        <select class="form-control" name="pair_type" id="pair_type">
                            <option value="11" selected>1:1</option>
                            <option value="21">2:1 or 1:2</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="required">Commission Type</label>
                        <select class="form-control" name="commission_type" id="commission_type">
                            <option value="flat" selected>Flat</option>
                            <option value="percentage">Percentage</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="required">Pair Value</label>
                        <input class="form-control" name="pair_value" id="pair_value" value="100" maxlength="5">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="required">Pair Commission - Bronze<span class="span_percent"> (%)</span></label>
                        <input class="form-control pair-commission" name="pair_commission_1" id="pair_commission_1"
                               value="100" maxlength="5">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="required">Pair Commission - Silver<span class="span_percent"> (%)</span></label>
                        <input class="form-control pair-commission" name="pair_commission_2" id="pair_commission_2"
                               value="700" maxlength="5">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="required">Pair Commission - Membership Pack 3<span class="span_percent"> (%)</span></label>
                        <input class="form-control pair-commission" name="pair_commission_3" id="pair_commission_3"
                               value="15" maxlength="5">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="mb-0 align-middle">
                            <input type="checkbox" class="switch" checked/> <span>Enable Carry Forward</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="mb-0 align-middle">
                            <input type="checkbox" class="switch" checked/> <span>Enable Pair Ceiling</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="required">Maximum Pair Count for Pair Ceiling</label>
                        <input class="form-control" name="flush_out_limit" id="flush_out_limit" value="20" maxlength="5">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="required">Pair Ceiling Period</label>
                        <select class="form-control" name="flush_out_period" id="flush_out_period">
                            <option value="daily" selected>Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-sm btn-primary" type="submit" value="Update" name="binary_bonus_setting" id="binary_bonus_setting">Update</button>
            </div>
        </form>

    </div>
@endsection

@section('style')
    <!-- Switchery -->
    <link href="{{ asset('admin/vendors/switchery/dist/switchery.css') }}" rel="stylesheet">
@endsection
@section('script')
    <!-- Switchery -->
    <script src="{{ asset('admin/vendors/switchery/dist/switchery.js') }}"></script>
    <script>
        jQuery(document).ready(function($){
            var elems = Array.prototype.slice.call(document.querySelectorAll('.switch'));
            elems.forEach(function (html) {
                var switchery = new Switchery(html, {
                    color: '#26B99A',
                    size: 'exsmall'
                });
            });
        });
    </script>
@endsection