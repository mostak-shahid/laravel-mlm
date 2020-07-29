@extends('layouts.backend')

@section('page-title')
    Level Commissions Settings
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')

    <div class="x_panel">
        <form>
            <div class="form-group">
                <label class="required control-label">Type of Commission</label>
                <select class="form-control" name="level_commission_type" id="level_commission_type" onchange="change_level_commission_type(this.value);">
                    <option value="percentage">Percentage</option>
                    <option value="flat" selected="true">Flat</option>
                </select>
            </div>
            <div class="form-group">
                <label class="required control-label">Level Commission Criteria</label>
                <select class="form-control" name="level_commission_criteria" id="level_commission_criteria">
                    <option value="genealogy" selected="true">Commissions based on genealogy</option>
                    <option value="reg_pck">Commissions based on registration pack</option>
                    <option value="member_pck">Commissions based on member pack</option>
                </select>

            </div>
            <div class="form-group">
                <label class="required control-label">Maximum commission upto level</label>
                <input type="text" maxlength="5" class="form-control" name="commission_upto_level" data-lang="You must enter Maximum commission upto level" id="commission_upto_level" min="0" value="3">
            </div>
            <button class="btn btn-sm btn-success" type="submit" value="Update" name="level_commission_common" id="level_commission">Update</button>
        </form>
        <hr>
        <form>
            <div class="form-group">
                <label for="level_commission_1">Level 1 Commission</label>
                <input type="text" class="form-control" name="level_commission[]" id="level_commission_1" min="0" value="3.00">
            </div>
            <div class="form-group">
                <label for="level_commission_2">Level 2 Commission</label>
                <input type="text" class="form-control" name="level_commission[]" id="level_commission_2" min="0" value="3.00">
            </div>
            <div class="form-group">
                <label for="level_commission_3">Level 3 Commission</label>
                <input type="text" class="form-control" name="level_commission[]" id="level_commission_3" min="0" value="3.00">
            </div>
            <button class="btn btn-sm btn-success" type="submit" value="Update" name="level_commission_common" id="level_commission">Update</button>
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