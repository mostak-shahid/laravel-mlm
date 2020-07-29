@extends('layouts.backend')

@section('page-title')
    Payment Settings
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')

    <div class="x_panel mb-30">
        <div class="row justify-content-center">
            <div class="col-auto">
                <form class="form-inline">
                    <input type="text" class="form-control mb-0 mr-sm-2" id="inlineFormInputName2" placeholder="Method Name">
                    <button type="submit" class="btn btn-primary mb-0">Add Method</button>
                </form>
            </div>
        </div>
    </div>
    <div class="table-responsive bg-white mb-30">
        <table class="table table-bordered mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Method Name</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Bkash</td>
                <td>
                    <div class="">
                        <label class="mb-0">
                            <input type="checkbox" class="switch" checked/>
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rocket</td>
                <td>
                    <div class="">
                        <label class="mb-0">
                            <input type="checkbox" class="switch" checked/>
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Nagad</td>
                <td>
                    <div class="">
                        <label class="mb-0">
                            <input type="checkbox" class="switch" checked/>
                        </label>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('style')
    <!-- Switchery -->
    <link href="{{ asset('admin/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
@endsection
@section('script')
    <!-- Switchery -->
    <script src="{{ asset('admin/vendors/switchery/dist/switchery.min.js') }}"></script>
    <script>
        jQuery(document).ready(function($){
            var elems = Array.prototype.slice.call(document.querySelectorAll('.switch'));
            elems.forEach(function (html) {
                var switchery = new Switchery(html, {
                    color: '#26B99A',
                    size: 'small'
                });
            });
        });
    </script>
@endsection