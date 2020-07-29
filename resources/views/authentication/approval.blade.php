@extends('layouts.backend')

@section('page-title')
    Approval
@endsection
@section('sidebar')
    @include('user.menu')
@endsection
@section('content')
    <div class="x_panel">
        @if(@$data)
            @foreach($data as $user)
                {{$user->name}}<br/>
            @endforeach
        @endif
        <table id="user-table" class="table table-borderless dt-responsive" cellspacing="0" width="100%">
            <thead class="bg-light">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Sponsor</th>
                <th>Parent</th>
                <th>Package</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection
@section('style')
    <!-- Datatables -->
    <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">

@endsection
@section('script')
    <!-- Datatables -->
    <script src="{{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('#user-table').DataTable({
                // "pagingType": "simple",
                // "bSort" : false,
//                "language": {
//                    "lengthMenu": "Show _MENU_ emails",
//                    "zeroRecords": "Nothing found - sorry",
//                    "info": "Showing page _PAGE_ of _PAGES_", //Showing 1 to 10 of 24 entries
//                    "infoEmpty": "No emails available",
//                    "infoFiltered": "(filtered from _MAX_ total emails)"
//                },
                order: [[ 0, "desc" ]],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.authentication.approval') }}",
                },
                columns: [
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'sponsor',
                        name: 'sponsor'
                    },
                    {
                        data: 'parent',
                        name: 'parent'
                    },
                    {
                        data: 'package',
                        name: 'package'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    }
                ]
            });
        });
    </script>
@endsection