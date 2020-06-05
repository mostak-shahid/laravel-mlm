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
            <div class="col-sm-3 mail_list_column">
                <a href="{{ route('user.mailbox.compose')}}" id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.index') }}">Inbox</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.starred') }}">Starred</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.sent') }}">Sent</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.draft') }}">Drafts</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.spam') }}">Spam</a> <span class="badge badge-primary badge-pill">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-0"><a class="text-black py-3" href="{{ route('user.mailbox.trash') }}">Trash</a></li>
                </ul>
            </div>
            <!-- /MAIL LIST -->

            <!-- CONTENT MAIL -->
            <div class="col-sm-9 mail_view">
                <div class="inbox-body table-responsive">
                    <table id="mail-table" class="table table-borderless nowrap" cellspacing="0" width="100%">
                        <thead class="bg-light">
                            <tr>
                                <th class="align-middle">
                                    <input type="checkbox" class="flat">
                                </th>
                                <th>
                                    <div class="mail-select-options">
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a class="btn btn-default" href="#" title="Report spam"><i class="fa fa-exclamation-circle"></i></a>
                                            <a class="btn btn-default" href="#" title="Delete"><i class="fa fa-trash-o"></i></a>
                                            <a class="btn btn-default" href="#" title="Mark as read"><i class="fa fa-envelope-open-o"></i></a>
                                        </div>
                                    </div>
                                </th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox" class="flat">
                                </td>
                                <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">Facebook</a> </td>
                                <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">Reset your account password</a></td>
                                <td> <a href="{{route('user.mailbox.show',['id'=>1])}}"><i class="fa fa-paperclip"></i></a> </td>
                                <td>13:52</td>
                            </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="flat">
                            </td>
                            <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Google AdWords</a> </td>
                            <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
                                Google AdWords: Ads not serving
                            </a> 
                        </td>
                        <td></td>
                        <td>09:27</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" class="flat">
                        </td>
                        <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Apple.com</a> </td>
                        <td> <a href="{{route('user.mailbox.show',['id'=>1])}}"> <span class="label label-danger">Business</span>
                            Your apple account ID has been accessed from un-familiar location.
                        </a> 
                    </td>
                    <td></td>
                    <td>Today</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="flat">
                    </td>
                    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">World Weather Online</a> </td>
                    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
                        Over Throttle Alert
                    </a> 
                </td>
                <td> <a href="{{route('user.mailbox.show',['id'=>1])}}"><i class="fa fa-paperclip"></i></a> </td>
                <td>Yesterday</td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" class="flat">
                </td>
                <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Dropbox</a> </td>
                <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
                    Complete your Dropbox setup!
                </a> 
            </td>
            <td></td>
            <td>4 Dec</td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" class="flat">
            </td>
            <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">Arlind Nushi</a> </td>
            <td> <a href="{{route('user.mailbox.show',['id'=>1])}}"> <span class="label label-warning">Friends</span>
                Work progress for Neon Project
            </a> 
        </td>
        <td></td>
        <td>28 Nov</td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" class="flat">
        </td>
        <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">Jose D. Gardner</a> </td>
        <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
            Regarding to your website issues.
        </a> 
    </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}"><i class="fa fa-paperclip"></i></a> </td>
    <td>22 Nov</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Aurelio D. Cummins</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        Steadicam operator
    </a> 
</td>
<td></td>
<td>15 Nov</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Filan Fisteku</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        You are loosing clients because your website is not responsive.
    </a> 
</td>
<td></td>
<td>02 Nov</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Instagram</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        Instagram announces the new video uploadin feature.
    </a> 
</td>
<td> <a href="{{route('user.mailbox.show',['id'=>1])}}"><i class="fa fa-paperclip"></i></a> </td>
<td>26 Oct</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">James Blue</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}"> <span class="label label-info">Sports</span>
        There are 20 notifications
    </a> 
</td>
<td></td>
<td>18 Oct</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">SomeHost</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        Bugs in your system.
    </a> 
</td>
<td></td>
<td>01 Sep</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">Facebook</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        Reset your account password
    </a> 
</td>
<td> <a href="{{route('user.mailbox.show',['id'=>1])}}"><i class="fa fa-paperclip"></i></a> </td>
<td>13:52</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Google AdWords</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        Google AdWords: Ads not serving
    </a> 
</td>
<td></td>
<td>09:27</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Apple.com</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}"> <span class="label label-danger">Business</span>
        Your apple account ID has been accessed from un-familiar location.
    </a> 
</td>
<td></td>
<td>Today</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">World Weather Online</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        Over Throttle Alert
    </a> 
</td>
<td> <a href="{{route('user.mailbox.show',['id'=>1])}}"><i class="fa fa-paperclip"></i></a> </td>
<td>Yesterday</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Dropbox</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        Complete your Dropbox setup!
    </a> 
</td>
<td></td>
<td>4 Dec</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">Arlind Nushi</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}"> <span class="label label-warning">Friends</span>
        Work progress for Neon Project
    </a> 
</td>
<td></td>
<td>28 Nov</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">Jose D. Gardner</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        Regarding to your website issues.
    </a> 
</td>
<td> <a href="{{route('user.mailbox.show',['id'=>1])}}"><i class="fa fa-paperclip"></i></a> </td>
<td>22 Nov</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Aurelio D. Cummins</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        Steadicam operator
    </a> 
</td>
<td></td>
<td>15 Nov</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Filan Fisteku</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        You are loosing clients because your website is not responsive.
    </a> 
</td>
<td></td>
<td>02 Nov</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">Instagram</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        Instagram announces the new video uploadin feature.
    </a> 
</td>
<td> <a href="{{route('user.mailbox.show',['id'=>1])}}"><i class="fa fa-paperclip"></i></a> </td>
<td>26 Oct</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">James Blue</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}"> <span class="label label-info">Sports</span>
        There are 20 notifications
    </a> 
</td>
<td></td>
<td>18 Oct</td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="flat">
    </td>
    <td><a href="{{route('user.mailbox.show',['id'=>1])}}">SomeHost</a> </td>
    <td> <a href="{{route('user.mailbox.show',['id'=>1])}}">
        Bugs in your system.
    </a> 
</td>
<td></td>
<td>01 Sep</td>
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
    <!-- iCheck -->
    <link href="{{ asset('admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
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
    <!-- iCheck -->
    <script src="{{ asset('admin/vendors/iCheck/icheck.min.js') }}"></script>
    <script>
    jQuery(document).ready(function($){
        $('#mail-table').DataTable({
            "pagingType": "simple",
            "bSort" : false,
            "language": {
                "lengthMenu": "Show _MENU_ emails",
                "zeroRecords": "Nothing found - sorry",
                "info": "Showing page _PAGE_ of _PAGES_", //Showing 1 to 10 of 24 entries
                "infoEmpty": "No emails available",
                "infoFiltered": "(filtered from _MAX_ total emails)"
            }
            // "autoWidth": false,
            /*columnDefs: [
                { width: 300, targets: 2 }
            ]*/
        });
    });
    </script>
@endsection