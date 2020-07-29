@extends('layouts.backend')

@section('page-title')
    Commission Report
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
<div class="x_panel">
    <div class="x_title">
        <h2>Total Payable Amount: 67,512.65</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="report-table" class="table table-bordered dt-responsive" cellspacing="0" width="100%">
            <thead class="bg-light">
            <tr>
                <th>Amount Type</th>
                <th>Total Amount</th>
                <th>Service Charge</th>
                <th>Amount Payable</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Binary Commission</td>
                <td>200</td>
                <td>0</td>
                <td>200</td>
                <td>2020-01-01</td>
            </tr>
            <tr>
                <td>Matching Bonus</td>
                <td>200</td>
                <td>0</td>
                <td>200</td>
                <td>2020-01-01</td>
            </tr>
            <tr>
                <td>Referral commission</td>
                <td>200</td>
                <td>0</td>
                <td>200</td>
                <td>2020-01-01</td>
            </tr>
            <tr>
                <td>Rank Commission</td>
                <td>200</td>
                <td>0</td>
                <td>200</td>
                <td>2020-01-01</td>
            </tr>
            </tbody>
        </table>
        Username	Full Name	Amount Type	Date	Total Amount	TDS	Service Charge	Amount Payable
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
            $('#report-table').DataTable({
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
                order: [[ 4, "desc" ]],
            });
        });
    </script>
@endsection