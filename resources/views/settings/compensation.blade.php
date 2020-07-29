@extends('layouts.backend')

@section('page-title')
    General Settings
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')

    <div class="table-responsive bg-white mb-30">
        <table class="table table-bordered mb-0" id="compensation_page">
            <thead>
            <tr>
                <th>Type of Compensations</th>
                <th>Status</th>
                <th>Configuration</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="align-middle">Binary Commission</td>
                <td class="align-middle">
                    <div class="">
                        <label class="mb-0">
                            <input type="checkbox" class="switch" checked/>
                        </label>
                    </div>
                </td>
                <td class="align-middle"><a href="{{route('admin.settings.compensation.bianary')}}" class="btn btn-sm btn-secondary rounded-circle m-0"> <i class="fa fa-cog"></i></a>
                </td>
            </tr>
            <tr>
                <td class="align-middle">Level Commission</td>
                <td class="align-middle">
                    <div class="">
                        <label class="mb-0">
                            <input type="checkbox" class="switch" checked/>
                        </label>
                    </div>
                </td>
                <td class="align-middle"><a href="{{route('admin.settings.compensation.level')}}" class="btn btn-sm btn-secondary rounded-circle m-0"> <i class="fa fa-cog"></i></a>
                </td>
            </tr>
            <tr>
                <td class="align-middle">Referral Commission</td>
                <td class="align-middle">
                    <div class="">
                        <label class="mb-0">
                            <input type="checkbox" class="switch" checked/>
                        </label>
                    </div>
                </td>
                <td class="align-middle"><a href="{{route('admin.settings.compensation.referal')}}" class="btn btn-sm btn-secondary rounded-circle m-0"> <i class="fa fa-cog"></i></a>
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