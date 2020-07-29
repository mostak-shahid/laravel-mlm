@extends('layouts.backend')

@section('page-title')
    Payout
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
<div class="x_panel">
    <div class="x_content">
        <div class="row">
            <div class="col-lg-6">
                <form action="">
                    <div class="form-group">
                        <label for="withdrawal_amount">Withdrawal Amount<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="withdrawal_amount" id="withdrawal_amount" data-parsley-type="alphanum" required />
                    </div>
                    <div class="form-group">
                        <label for="transaction_password">Transaction Password<span class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="transaction_password" id="transaction_password" required />
                    </div>
                    <div class="form-group">
                        <label for="otp">OTP<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="otp" id="otp" required />
                    </div>
                    <button type="button" class="btn btn-info">Generate OTP</button>
                    <button type="submit" class="btn btn-success">Withdraw</button>
                </form>
            </div>
            <div class="col-lg-6">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>Particular</th>
                            <th class="text-right">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>E-wallet Balance</td>
                            <td class="text-right">99999999.00</td>
                        </tr>
                        <tr>
                            <td>Ewallet Amount Already in Payout Process</td>
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>Paid Amount</td>
                            <td class="text-right">99999.00</td>
                        </tr>
                        <tr>
                            <td>Preferred Payout Method</td>
                            <td class="text-right">BKash</td>
                        </tr>
                        <tr>
                            <td>Minimum Withdrawal Amount</td>
                            <td class="text-right">100.00</td>
                        </tr>
                        <tr>
                            <td>Maximum Withdrawal Amount</td>
                            <td class="text-right">10000.00</td>
                        </tr>
                        <tr>
                            <td>Payout Fee</td>
                            <td class="text-right">0.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="x_panel">
    <div class="x_content">
        <table id="wallet-table" class="table table-bordered dt-responsive" cellspacing="0" width="100%">
            <thead class="bg-light">
            <tr>
                <th>Requested</th>
                <th>Amount</th>
                <th>Payout Method</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>2020-01-01</td>
                <td>100.00</td>
                <td>BKash</td>
                <td>Pending Requests</td>
            </tr>
            <tr>
                <td>2020-01-02</td>
                <td>100.00</td>
                <td>BKash</td>
                <td>Approved - Pending Payment</td>
            </tr>
            <tr>
                <td>2020-01-03</td>
                <td>100.00</td>
                <td>Bank</td>
                <td>Approved - Paid</td>
            </tr>
            <tr>
                <td>2020-01-04</td>
                <td>100.00</td>
                <td>Bank</td>
                <td>Rejected Requests</td>
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
            $('#wallet-table').DataTable({
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
                order: [[ 0, "desc" ]],
            });
        });
    </script>
@endsection