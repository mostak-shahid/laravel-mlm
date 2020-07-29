@extends('layouts.backend')

@section('page-title')
    Order History
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
<div class="x_panel">
    <div class="x_content">
        <table id="orders-table" class="table table-bordered dt-responsive">
            <thead>
            <tr>
                <th>Date</th>
                <th>Order No</th>
                <th>Order Total</th>
                <th>Status</th>
                <th>Payment Method</th>
                <th>Shipping Method</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-title="Date">2020-01-01</td>
                <td data-title="Order No">#123</td>
                <td data-title="Order Total"><strong>50.00 for 5 items</strong></td>
                <td data-title="Status">On hold</td>
                <td data-title="Payment Method">Cash on delivery</td>
                <td data-title="Payment Method">Flat Shipping Rate</td>
                <td data-title="Action"><a href="{{ route('user.order.show',['id'=>'123']) }}" class="btn btn-link">View Details</a></td>
            </tr>
            <tr>
                <td data-title="Date">2020-01-01</td>
                <td data-title="Order No">#456</td>
                <td data-title="Order Total"><strong>50.00 for 5 items</strong></td>
                <td data-title="Status">On hold</td>
                <td data-title="Payment Method">Cash on delivery</td>
                <td data-title="Payment Method">Flat Shipping Rate</td>
                <td data-title="Action"><a href="{{ route('user.order.show',['id'=>'123']) }}" class="btn btn-link">View Details</a></td>
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
            $("#orders-table").DataTable({
                // dom: "Blfrtip",
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

                columnDefs: [
                    {
                        "targets": [ 6 ],
                        "orderable": false
                    },
                ]
            });
        });
    </script>
@endsection
