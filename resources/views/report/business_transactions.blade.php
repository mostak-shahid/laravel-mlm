@extends('layouts.backend')

@section('page-title')
    Business Transactions
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
            <thead class="">
            <tr class="th">
                <th>#</th>
                <th>Category</th>
                <th>Member Name</th>
                <th>Amount</th>
                <th>Transaction Date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td><span class="badge badge-info">Bonus</span> Referral Commission</td>
                <td>Your First Name NA <span>(<a target='_blank' href='#' class='btn-link text-primary'>INF750391</a>)</span></td>
                <td>
                    100.00
                </td>
                <td>21 Jul 2020 - 03:37:05 AM</td>
            </tr>
            <tr>
                <td>2</td>
                <td><span class="badge badge-info">Bonus</span> Level Commission</td>
                <td>Georgh Whitman <span>(<a target='_blank' href='#' class='btn-link text-primary'>binarydemo</a>)</span></td>
                <td>
                    2.00
                </td>
                <td>21 Jul 2020 - 03:37:05 AM</td>
            </tr>
            <tr>
                <td>3</td>
                <td><span class="badge badge-success">Income</span> Commission Charges</td>
                <td>Your First Name NA <span>(<a target='_blank' href='#' class='btn-link text-primary'>INF750391</a>)</span></td>
                <td>
                    15.00
                </td>
                <td>21 Jul 2020 - 03:37:05 AM</td>
            </tr>
            <tr>
                <td>4</td>
                <td><span class="badge badge-info">Bonus</span> Level Commission</td>
                <td>Your First Name NA <span>(<a target='_blank' href='#' class='btn-link text-primary'>INF750391</a>)</span></td>
                <td>
                    3.00
                </td>
                <td>21 Jul 2020 - 03:37:05 AM</td>
            </tr>
            <tr>
                <td>5</td>
                <td><span class="badge badge-success">Income</span> Commission Charges</td>
                <td>Georgh Whitman <span>(<a target='_blank' href='#' class='btn-link text-primary'>binarydemo</a>)</span></td>
                <td>
                    0.30
                </td>
                <td>21 Jul 2020 - 03:37:05 AM</td>
            </tr>
            <tr>
                <td>6</td>
                <td><span class="badge badge-success">Income</span> Commission Charges</td>
                <td>Your First Name NA <span>(<a target='_blank' href='#' class='btn-link text-primary'>INF750391</a>)</span></td>
                <td>
                    0.45
                </td>
                <td>21 Jul 2020 - 03:37:05 AM</td>
            </tr>
            <tr>
                <td>7</td>
                <td><span class="badge badge-success">Income</span> Package Amount</td>
                <td>Your First Name  <span>(<a target='_blank' href='#' class='btn-link text-primary'>DEMOU7T</a>)</span></td>
                <td>
                    1,500.00
                </td>
                <td>21 Jul 2020 - 03:37:03 AM</td>
            </tr>
            <tr>
                <td>8</td>
                <td><span class="badge badge-success">Income</span> Registration Fee</td>
                <td>Your First Name  <span>(<a target='_blank' href='#' class='btn-link text-primary'>DEMOU7T</a>)</span></td>
                <td>
                    1,000.00
                </td>
                <td>21 Jul 2020 - 03:37:03 AM</td>
            </tr>
            <tr>
                <td>9</td>
                <td><span class="badge badge-success">Income</span> Commission Charges</td>
                <td>Georgh Whitman <span>(<a target='_blank' href='#' class='btn-link text-primary'>binarydemo</a>)</span></td>
                <td>
                    0.30
                </td>
                <td>20 Jul 2020 - 12:02:10 AM</td>
            </tr>
            <tr>
                <td>10</td>
                <td><span class="badge badge-info">Bonus</span> Binary Commission</td>
                <td>Your First Name NA <span>(<a target='_blank' href='#' class='btn-link text-primary'>INF750391</a>)</span></td>
                <td>
                    100.00
                </td>
                <td>20 Jul 2020 - 12:02:10 AM</td>
            </tr>
            <tr>
                <td>11</td>
                <td><span class="badge badge-success">Income</span> Commission Charges</td>
                <td>Your First Name NA <span>(<a target='_blank' href='#' class='btn-link text-primary'>INF750391</a>)</span></td>
                <td>
                    0.45
                </td>
                <td>20 Jul 2020 - 12:02:10 AM</td>
            </tr>
            <tr>
                <td>12</td>
                <td><span class="badge badge-success">Income</span> Commission Charges</td>
                <td>Your First Name NA <span>(<a target='_blank' href='#' class='btn-link text-primary'>INF750391</a>)</span></td>
                <td>
                    15.00
                </td>
                <td>20 Jul 2020 - 12:02:10 AM</td>
            </tr>
            <tr>
                <td>13</td>
                <td><span class="badge badge-info">Bonus</span> Referral Commission</td>
                <td>Your First Name NA <span>(<a target='_blank' href='#' class='btn-link text-primary'>INF750391</a>)</span></td>
                <td>
                    100.00
                </td>
                <td>20 Jul 2020 - 12:02:10 AM</td>
            </tr>
            <tr>
                <td>14</td>
                <td><span class="badge badge-info">Bonus</span> Level Commission</td>
                <td>Georgh Whitman <span>(<a target='_blank' href='#' class='btn-link text-primary'>binarydemo</a>)</span></td>
                <td>
                    2.00
                </td>
                <td>20 Jul 2020 - 12:02:10 AM</td>
            </tr>
            <tr>
                <td>15</td>
                <td><span class="badge badge-success">Income</span> Commission Charges</td>
                <td>Your First Name NA <span>(<a target='_blank' href='#' class='btn-link text-primary'>INF750391</a>)</span></td>
                <td>
                    15.00
                </td>
                <td>20 Jul 2020 - 12:02:10 AM</td>
            </tr>
            <tr>
                <td>16</td>
                <td><span class="badge badge-info">Bonus</span> Level Commission</td>
                <td>Your First Name NA <span>(<a target='_blank' href='#' class='btn-link text-primary'>INF750391</a>)</span></td>
                <td>
                    3.00
                </td>
                <td>20 Jul 2020 - 12:02:10 AM</td>
            </tr>
            <tr>
                <td>17</td>
                <td><span class="badge badge-success">Income</span> Registration Fee</td>
                <td>Testing Testing <span>(<a target='_blank' href='https://backoffice.infinitemlmsoftware.com/backoffice/admin/profile/profile_view?user_name=DEMOtesting' class='btn-link text-primary'>DEMOtesting</a>)</span></td>
                <td>
                    1,000.00
                </td>
                <td>20 Jul 2020 - 12:02:09 AM</td>
            </tr>
            <tr>
                <td>18</td>
                <td><span class="badge badge-success">Income</span> Package Amount</td>
                <td>Testing Testing <span>(<a target='_blank' href='https://backoffice.infinitemlmsoftware.com/backoffice/admin/profile/profile_view?user_name=DEMOtesting' class='btn-link text-primary'>DEMOtesting</a>)</span></td>
                <td>
                    1,500.00
                </td>
                <td>20 Jul 2020 - 12:02:09 AM</td>
            </tr>
            <tr>
                <td>19</td>
                <td><span class="badge badge-info">Bonus</span> Referral Commission</td>
                <td>Your First Name NA <span>(<a target='_blank' href='#' class='btn-link text-primary'>INF750391</a>)</span></td>
                <td>
                    100.00
                </td>
                <td>16 Jul 2020 - 03:58:37 PM</td>
            </tr>
            <tr>
                <td>20</td>
                <td><span class="badge badge-info">Bonus</span> Level Commission</td>
                <td>Georgh Whitman <span>(<a target='_blank' href='#' class='btn-link text-primary'>binarydemo</a>)</span></td>
                <td>
                    2.00
                </td>
                <td>16 Jul 2020 - 03:58:37 PM</td>
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
                // order: [[5, "desc"]],
            });
        });
    </script>
@endsection