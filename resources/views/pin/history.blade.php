@extends('layouts.backend')

@section('page-title')
My E-PIN
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
    <div class="x_panel">
        <div class="x_content text-center">
            <div class="row justify-content-md-center">
                <div class="col-auto">
                    <form class="form-inline">
                        <div class="form-group">
                            <select class="custom-select mr-2" id="epin" required>
                                <option selected value="">Open amount list</option>
                                <option value="pin1">pin1</option>
                                <option value="pin2">pin2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control mr-2" name="user_id" data-parsley-type="alphanum" placeholder="Number of E-PIN" min="1" value="1" required />
                        </div>
                        <button type="submit" class="btn btn-success mr-0 mb-0">Apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_content">
            <table id="pin-table" class="table table-bordered dt-responsive" cellspacing="0" width="100%">
                <thead class="bg-light">
                    <tr>
                        <th>E-Pin</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>HD7QA3G8L8</td>
                        <td>4000</td>
                        <td>Active</td>
                        <td>2020-01-01</td>
                    </tr>
                    <tr>
                        <td>5W445NMRGM</td>
                        <td>4000</td>
                        <td>Blocked</td>
                        <td>2020-01-02</td>
                    </tr>
                    <tr>
                        <td>AU3T2TQHLI</td>
                        <td>4000</td>
                        <td>Used</td>
                        <td>2020-02-01</td>
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
                order: [[ 3, "desc" ]],
            });
        });
    </script>
@endsection