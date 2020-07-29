@extends('layouts.backend')

@section('page-title')
    Mailbox
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
<div class="x_panel">
    <div class="x_content">
        <div class="row">

        @include('mailbox.menu')
        <!-- CONTENT MAIL -->
            <div class="col-sm-9 mail_view">
                <div class="inbox-body">
                    <table id="mail-table" class="table table-borderless dt-responsive" cellspacing="0" width="100%">
                        <thead class="bg-light">
                        <tr>
                            <th></th>
                            <th class="align-middle">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="email-all">
                                    <label class="custom-control-label" for="email-all"></label>
                                </div>
                            </th>
                            <th>
                                <div class="mail-select-options">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a class="btn btn-default" href="#" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </div>
                            </th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('style')
    <!-- Datatables -->
    <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

@endsection
@section('script')
    <!-- Datatables -->
    <script src="{{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

    <script>
    jQuery(document).ready(function($){
        $('#mail-table').DataTable({
            "pagingType": "simple",
            // "bSort" : false,
            "language": {
                "lengthMenu": "Show _MENU_ emails",
                "zeroRecords": "Nothing found - sorry",
                "info": "Showing page _PAGE_ of _PAGES_", //Showing 1 to 10 of 24 entries
                "infoEmpty": "No emails available",
                "infoFiltered": "(filtered from _MAX_ total emails)"
            },
            order: [[ 0, "desc" ]],
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('user.mailbox.sent') }}",
            },
            columnDefs: [
                {
                    "targets": [ 0 ],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [ 1 ],
                    "orderable": false,
                    "width": 24
                },
                {
                    "targets": [ 2 ],
                    "orderable": false
                },
                {
                    "targets": [ 3 ],
                    "orderable": false
                },
                {
                    "targets": [ 4 ],
                    "orderable": false
                }
            ],
            columns: [
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'checkbox',
                    name: 'checkbox'
                },
                {
                    data: 'stared',
                    name: 'stared'
                },
                {
                    data: 'subject',
                    name: 'subject'
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                }
            ]
        });
        $('#email-all').change(function() {
            if(this.checked) {
                $('.custom-control-input').prop('checked',true);
            } else {
                $('.custom-control-input').prop('checked',false);
            }
        });
    });
    </script>
@endsection