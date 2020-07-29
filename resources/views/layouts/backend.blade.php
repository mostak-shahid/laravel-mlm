<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- toastr -->
    <link href="{{ asset('admin/vendors/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.css') }}" rel="stylesheet">
    <!-- Style for this page -->
    @yield('style')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{url('/')}}" class="site_title" target="_blank"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>
                @yield('sidebar')
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                               id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('admin/production/images/img.jpg') }}"
                                     alt="{{ Auth::user()->name }}">{{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:;"> Profile</a>
                                <a class="dropdown-item" href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                                <a class="dropdown-item" href="javascript:;">Help</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                            class="fa fa-sign-out pull-right"></i> {{ __('Log Out') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <li role="presentation" class="nav-item dropdown open">
                            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                               data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                aria-labelledby="navbarDropdown1">
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="{{ asset('admin/production/images/img.jpg') }}" alt="Profile Image"/></span>
                                        <span>
                                            <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">Film festivals used to be do-or-die moments for movie makers. They were where...</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="{{ asset('admin/production/images/img.jpg') }}" alt="Profile Image"/></span>
                                        <span>
                                            <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">Film festivals used to be do-or-die moments for movie makers. They were where...</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="{{ asset('admin/production/images/img.jpg') }}" alt="Profile Image"/></span>
                                        <span>
                                            <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">Film festivals used to be do-or-die moments for movie makers. They were where...</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="{{ asset('admin/production/images/img.jpg') }}" alt="Profile Image"/></span>
                                        <span>
                                            <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">Film festivals used to be do-or-die moments for movie makers. They were where...</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <div class="text-center">
                                        <a class="dropdown-item">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>@yield('page-title')</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                @yield('content')
                <div class="clearfix"></div>
                @if(Auth::user()->admin)
                    <div class="x_panel mb-30">
                        <div class="row">
                            <a href="{{route('admin.settings')}}" class="col text-center text-muted">
                                <i class="fa fa-desktop d-block mb-2 fa-2x"></i>
                                <span>General</span>
                            </a>
                            <a href="{{route('admin.settings.compensation')}}" class="col text-center text-muted">
                                <i class="fa fa-calculator d-block mb-2 fa-2x"></i>
                                <span>Compensation</span>
                            </a>
                            <a href="#" class="col text-center text-muted">
                                <i class="fa fa-trophy d-block mb-2 fa-2x"></i>
                                <span>Rank</span>
                            </a>
                            <a href="#" class="col text-center text-muted">
                                <i class="fa fa-tags d-block mb-2 fa-2x"></i>
                                <span>E-pin</span>
                            </a>
                            <a href="#" class="col text-center text-muted">
                                <i class="fa fa-money d-block mb-2 fa-2x"></i>
                                <span>Currency</span>
                            </a>
                            <a href="{{route('admin.settings.payout')}}" class="col text-center text-muted">
                                <i class="fa fa-history d-block mb-2 fa-2x"></i>
                                <span>Payout</span>
                            </a>
                            <a href="{{route('admin.settings.payment')}}" class="col text-center text-muted">
                                <i class="fa fa-credit-card d-block mb-2 fa-2x"></i>
                                <span>Payment</span>
                            </a>
                            <a href="{{route('admin.settings.signup')}}" class="col text-center text-muted">
                                <i class="fa fa-user-plus d-block mb-2 fa-2x"></i>
                                <span>Signup</span>
                            </a>
                            <a href="{{route('admin.settings.mail')}}" class="col text-center text-muted">
                                <i class="fa fa-envelope d-block mb-2 fa-2x"></i>
                                <span>Mail</span>
                            </a>
                            <a href="{{route('admin.settings.tree')}}" class="col text-center text-muted">
                                <i class="fa fa-arrows d-block mb-2 fa-2x"></i>
                                <span>Tree</span>
                            </a>
                            <a href="{{route('admin.settings.api')}}" class="col text-center text-muted">
                                <i class="fa fa-key d-block mb-2 fa-2x"></i>
                                <span>API Key</span>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                @endif
                <div class="x_panel h-100">
                    <div class="row">
                        <div class="col-md-6">
                            <p><i class="fa fa-check-circle"></i> You are viewing shared demo. Multiple users may try
                                this demo simultaneously.</p>
                            <p><i class="fa fa-check-circle"></i> Try <a class="text-primary" href="https://infinitemlmsoftware.com/register.php" target="_blank">custom demo </a>as per your configurations.</p>
                        </div>
                        <div class="col-md-6 b-l">
                            <p><i class="fa fa-check-circle"></i> Once the demo is ready, you can simply move the demo
                                to your own domain name.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-fw fa-newspaper-o fa-stack-1x fa-inverse"></i>
                                </span>
                                        Mos MLM Blog
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="skype:live:mostak.shahid">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-fw fa-skype fa-stack-1x fa-inverse"></i>
                                </span>
                                        live:mostak.shahid
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="tel:+8801710702212">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-fw fa-whatsapp fa-stack-1x fa-inverse"></i>
                                </span>
                                        +88 017 1070 2212
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="mailto:mostak.shahid@gmail.com">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-fw fa-envelope fa-stack-1x fa-inverse"></i>
                                </span>
                                        mostak.shahid@gmail.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Mos MLM Solution - by <a href="https://www.mdmostakshahid.me" target="_blank">Md. Mostak Shahid</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('admin/vendors/nprogress/nprogress.js') }}"></script>
<!-- toastr -->
<script src="{{ asset('admin/vendors/toastr/toastr.min.js') }}"></script>
<!-- Scripts for this page -->
@yield('script')
@if(Session::has('success'))
    <script>
        toastr.success('{{Session::get('success')}}', 'Success!');
    </script>
@endif
<!-- Custom Theme Scripts -->
<script src="{{ asset('admin/build/js/custom.js') }}"></script>
</body>
</html>
