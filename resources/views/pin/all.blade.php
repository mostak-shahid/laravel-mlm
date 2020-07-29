@extends('layouts.backend')

@section('page-title')
    My E-PIN
@endsection
@section('sidebar')
    @include('user.menu')
@endsection
@section('content')
    <div class="x_panel">
        <div class="x_content">
            <table id="pin-table" class="table table-bordered dt-responsive" cellspacing="0" width="100%">
                <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>E-Pin</th>
                    <th>Allocated Member</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>9566679919</td>
                    <td>sam (INF170549)</td>
                    <td>4000</td>
                    <td>Active</td>
                    <td>2020-01-01</td>
                    <td><div class="btn-group"><a class="btn btn-sm btn-danger"><i class="fa fa-hand-paper-o"></i></a></div></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1174440315</td>
                    <td>sam (INF170549)</td>
                    <td>4000</td>
                    <td>Active</td>
                    <td>2020-01-02</td>
                    <td><div class="btn-group"><a class="btn btn-sm btn-danger"><i class="fa fa-hand-paper-o"></i></a></div></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>9820371043</td>
                    <td>sam (INF170549)</td>
                    <td>4000</td>
                    <td>Active</td>
                    <td>2020-01-03</td>
                    <td><div class="btn-group"><a class="btn btn-sm btn-danger"><i class="fa fa-hand-paper-o"></i></a></div></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>9432759798</td>
                    <td>sam (INF170549)</td>
                    <td>4000</td>
                    <td>Active</td>
                    <td>2020-02-03</td>
                    <td><div class="btn-group"><a class="btn btn-sm btn-danger"><i class="fa fa-hand-paper-o"></i></a></div></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('style')
    <!-- Datatables -->
    <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}"
          rel="stylesheet">

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
        jQuery(document).ready(function ($) {
            $('#pin-table').DataTable({
                dom: "<'row'<'col-sm-12 text-center'B>>" +
                "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [
                    {
                        extend: "copy",
                        className: "btn-sm btn-secondary"
                    },
                    {
                        extend: "csv",
                        className: "btn-sm btn-secondary"
                    },
                    {
                        extend: "excel",
                        className: "btn-sm btn-secondary"
                    },
                    {
                        extend: "pdfHtml5",
                        className: "btn-sm btn-secondary"
                    },
                    {
                        extend: "print",
                        className: "btn-sm btn-secondary"
                    },
                ],
                responsive: true,
                // order: [[3, "desc"]],
            });
        });
    </script>
@endsection