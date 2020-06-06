
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('admin/production/images/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="{{ route('user.dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <li><a><i class="fa fa-sitemap"></i> Network <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('user.network.index') }}">Genealogy Tree</a></li>
                      <li><a href="{{ route('user.network.sponsor') }}">Sponsor Tree</a></li>
                      <li><a href="{{ route('user.network.tree') }}">Tree View</a></li>
                      <li><a href="{{ route('user.network.downline') }}">Downline Members</a></li>
                      <li><a href="{{ route('user.network.referral') }}">Referral Members</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('user.authentication.register') }}"><i class="fa fa-user-plus"></i> Register</a></li>
                  <li><a><i class="fa fa-briefcase"></i> E-Wallet <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('user.wallet.statement') }}">E-Wallet Statement</a></li>
                      <li><a href="{{ route('user.wallet.transfer') }}">Fund Transfer</a></li>
                      <li><a href="{{ route('user.wallet.history') }}">Transfer History</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('user.wallet.earnings') }}"><i class="fa fa-money"></i> User Earnings</a></li>
                  <li><a><i class="fa fa-credit-card-alt"></i> Payout <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('user.wallet.payout') }}">Request Payout</a></li>
                      <li><a href="{{ route('user.wallet.payout.status') }}">Payout Status</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-address-book-o"></i> Profile Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('user.authentication.profile') }}">Profile View</a></li>
                      <li><a href="{{ route('user.authentication.password') }}">Change Login Password</a></li>
                      <li><a href="{{ route('user.authentication.pin') }}">Change Transaction Password</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('user.report.commission') }}">Commission</a></li>
                      <li><a href="{{ route('user.report.sales') }}">Sales</a></li>
                      <li><a href="{{ route('user.report.payout') }}">Payout Released</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Tools <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Download Materials</a></li>
                      <li><a href="fixed_footer.html">News</a></li>
                      <li><a href="fixed_footer.html">Feedback</a></li>
                      <li><a href="fixed_footer.html">FAQs</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('user.mailbox.index') }}"><i class="fa fa-envelope"></i>Mailbox</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->