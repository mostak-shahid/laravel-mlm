@extends('layouts.backend')

@section('page-title')
    Business Summary
@endsection
@section('sidebar')
    @include('user.menu')
@endsection
@section('content')
    <div class="x_panel">
        <ul class="list-inline mb-0">
            <li class="list-inline-item text-center p-3">
                <span class="d-block font-weight-bold">Total Income</span>
                <span class="d-block text-success"> 1,595,419.72 </span>
            </li>
            <li class="list-inline-item text-center p-3">
                <span class="d-block font-weight-bold">Bonus Generated</span>
                <span class="d-block text-info"> 64,279.70 </span>
            </li>
            <li class="list-inline-item text-center p-3">
                <span class="d-block font-weight-bold">Paid Amount</span>
                <span class="d-block text-danger"> 86,221.00 </span>
            </li>
            <li class="list-inline-item text-center p-3">
                <span class="d-block font-weight-bold">Pending Amount</span>
                <span class="d-block text-warning-dker"> 6,000.00 </span>
            </li>
            <li class="list-inline-item text-center p-3">
                <span class="d-block font-weight-bold">Profit</span>
                <span class="d-block text-primary"> 1,509,198.72 </span>
            </li>
        </ul>
    </div>
    <div class="x_panel">
        <table id="report-table" class="table table-bordered dt-responsive" cellspacing="0" width="100%">
            <thead class="bg-light">
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td class="td-label"><span class="badge badge-success">Income</span> Registration Fee</td>
                <td> 561,000.00
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td class="td-label"><span class="badge badge-success">Income</span> Package Amount</td>
                <td> 1,031,400.00
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td class="td-label"><span class="badge badge-success">Income</span> Fund Transfer Fee</td>
                <td> 10.42
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td class="td-label"><span class="badge badge-success">Income</span> Commission Charges</td>
                <td> 3,009.30
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td class="td-label"><span class="badge badge-success">Income</span> Payout Fee</td>
                <td> 0.00
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td class="td-label"><span class="badge badge-info">Bonus</span> Referral Commission</td>
                <td> 51,612.75
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td class="td-label"><span class="badge badge-info">Bonus</span> Level Commission</td>
                <td> 961.45
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td class="td-label"><span class="badge badge-info">Bonus</span> Binary Commission</td>
                <td> 11,705.50
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td class="td-label"><span class="badge badge-danger">Paid</span> Payout - Paid</td>
                <td> 86,221.00
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td class="td-label"><span class="badge badge-warning">Pending</span> Payout - Pending Amount</td>
                <td> 6,000.00
                </td>
            </tr>

            </tbody>
        </table>
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
    <style>
        .list-group-overview .list-group-item {
            display: inline-block;
            border: none;
        }
    </style>
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
                // order: [[ 5, "desc" ]],
            });
        });
    </script>
@endsection