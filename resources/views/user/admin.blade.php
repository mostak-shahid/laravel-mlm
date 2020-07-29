@extends('layouts.backend')

@section('page-title')
    Overview
@endsection
@section('sidebar')
    @include('user.menu')
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6 mb-30">
            <div class="row">
                <div class="col-6 mb-30">
                    <div class="tile-stats position-relative h-100 text-center rounded-0 bg-info text-white">
                        <div class="count">179</div>
                        <h5>Bonus Generated</h5>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                        <a class="hidden-link" href="{{ route('user.wallet.earnings') }}">Read More</a>
                    </div>
                </div>
                <div class="col-6 mb-30">
                    <div class="tile-stats position-relative h-100 text-center rounded-0">
                        <div class="count">179</div>
                        <h5>Paid Amount</h5>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                        <a class="hidden-link" href="{{ route('user.wallet.payout') }}">Read More</a>
                    </div>
                </div>
                <div class="col-6 mb-30">
                    <div class="tile-stats position-relative h-100 text-center rounded-0">
                        <div class="count">179</div>
                        <h5>Pending Amount</h5>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                        <a class="hidden-link" href="{{ route('user.wallet.payout') }}">Read More</a>
                    </div>
                </div>
                <div class="col-6 mb-30">
                    <div class="tile-stats position-relative h-100 text-center rounded-0 bg-success text-white">
                        <div class="count">179</div>
                        <h5>E-wallet Request</h5>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                        <a class="hidden-link" href="{{ route('user.wallet.earnings') }}">Read More</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tile-stats position-relative h-100 rounded-0">
                        <div class="icon"><i class="fa fa-money"></i>
                        </div>
                        <div class="count">179</div>
                        <h3>Total Income</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                        <a class="hidden-link" href="{{ route('user.wallet.statement') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-30">
            <div class="x_panel h-100">
                <div id="income_commission_chart" style="height:100%;"></div>
            </div>
        </div>
        <div class="col-lg-4 mb-30">
            <div class="x_panel h-100">
                <div class="x_title">Current Rank Holders</div>
                <div class="table-responsive">
                    <table class="table table-align-middle">
                        <tbody>
                        <tr>
                            <td><h5 class="text-md">Rank name</h5>
                                <p>Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p></td>
                            <td>
                                <span class="text-primary">8</span>
                            </td>
                        </tr>
                        <tr>
                            <td><h5 class="text-md">Rank name</h5>
                                <p>Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p></td>
                            <td>
                                <span class="text-primary">8</span>
                            </td>
                        </tr>
                        <tr>
                            <td><h5 class="text-md">Rank name</h5>
                                <p>Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p></td>
                            <td>
                                <span class="text-primary">8</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-30">
            <div class="x_panel h-100">
                <div class="x_title">New members</div>
                <div class="">
                    <ul class="list-unstyled">
                        <li class="media mb-4">
                            <img src="https://backoffice.infinitemlmsoftware.com/uploads/images/profile_picture/nophoto.jpg" class="mr-3" alt="DEMOtesting" width="60px" height="60px">
                            <div class="media-body align-self-center">
                                <h5 class="mt-0 mb-1">DEMOtesting</h5>
                                Today
                            </div>
                        </li>
                        <li class="media mb-4">
                            <img src="https://backoffice.infinitemlmsoftware.com/uploads/images/profile_picture/nophoto.jpg" class="mr-3" alt="Justin21" width="60px" height="60px">
                            <div class="media-body align-self-center">
                                <h5 class="mt-0 mb-1">Justin21</h5>
                                2020-07-16
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-30">
            <div class="x_panel h-100">
                <div id="income_chart" style="height:100%"></div>
            </div>
        </div>
        <div class="col-lg-6 mb-30">
            <div class="x_panel h-100">
                <div class="x_title">Income &amp; Commission</div>
                <nav class="nav mos-left-tab-nav">
                    <a class="nav-link active" id="income-tab" data-toggle="tab" href="#income" role="tab"
                       aria-controls="income" aria-selected="true">Income</a>
                    <a class="nav-link" id="commission-tab" data-toggle="tab" href="#commission" role="tab"
                       aria-controls="commission" aria-selected="false">Commission</a>
                </nav>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="income" role="tabpanel" aria-labelledby="income-tab">
                        <div class="table-responsive">
                            <table class="table table-align-middle">
                                <tbody>
                                <tr>
                                    <td>
                                        PAYOUT CANCELLED
                                    </td>
                                    <td>
                                        <span class="text-success">  136</span>
                                    </td>
                                    <td>
                                        <span class="btn btn-sm btn-info">PC</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        FUND CREDIT
                                    </td>
                                    <td>
                                        <span class="text-success">  89</span>
                                    </td>
                                    <td>
                                        <span class="btn btn-sm btn-info">FC</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        PAYOUT CANCELLED
                                    </td>
                                    <td>
                                        <span class="text-success">  28</span>
                                    </td>
                                    <td>
                                        <span class="btn btn-sm btn-info">PC</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        FUND TRANSFER
                                    </td>
                                    <td>
                                        <span class="text-success">  18</span>
                                    </td>
                                    <td>
                                        <span class="btn btn-sm btn-info">FT</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="commission" role="tabpanel" aria-labelledby="commission-tab">
                        <div class="table-responsive">
                            <table class="table table-align-middle">
                                <tbody>
                                <tr>
                                    <td>
                                        PAYOUT REQUESTED
                                    </td>
                                    <td>
                                        <span class="text-success">  264</span>
                                    </td>
                                    <td>
                                        <span class="comm-type btn btn-info">PR</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        PAYOUT RELEASE
                                    </td>
                                    <td>
                                        <span class="text-success">  100</span>
                                    </td>
                                    <td>
                                        <span class="comm-type btn btn-info">PR</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        PAYOUT RELEASED MANUALLY
                                    </td>
                                    <td>
                                        <span class="text-success">  50</span>
                                    </td>
                                    <td>
                                        <span class="comm-type btn btn-info">PRM</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-30">
            <div class="x_panel h-100">
                <div class="x_title">Team Performance</div>
                <nav class="nav mos-left-tab-nav">
                    <a class="nav-link active" id="earners-tab" data-toggle="tab" href="#earners" role="tab"
                       aria-controls="earners" aria-selected="true">Top Earners</a>
                    <a class="nav-link" id="recruiters-tab" data-toggle="tab" href="#recruiters" role="tab"
                       aria-controls="recruiters" aria-selected="false">Top Recruiters</a>
                    <a class="nav-link" id="package-tab" data-toggle="tab" href="#package" role="tab"
                       aria-controls="package" aria-selected="false">Package Overview</a>
                </nav>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="earners" role="tabpanel" aria-labelledby="earners-tab">No
                        Data Found
                    </div>
                    <div class="tab-pane fade" id="recruiters" role="tabpanel" aria-labelledby="recruiters-tab">No Data
                        Found
                    </div>
                    <div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="package-tab">
                        <div class="table-responsive">
                            <table class="table table-align-middle">
                                <tbody>
                                <tr>
                                    <td><h5 class="text-md">Product 1</h5>
                                        <p>You have 8 Product 1 package purchases in your team. </p></td>
                                    <td>
                                        <span class="text-primary">  8</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h5 class="text-md">Product 2</h5>
                                        <p>You have 10 Product 2 package purchases in your team. </p></td>
                                    <td>
                                        <span class="text-primary">  10</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

    <!-- ECharts -->
    <script src="{{ asset('admin/vendors/echarts/echarts.min.js') }}"></script>
    <script>
        var domIncomeCommisionChart = document.getElementById("income_commission_chart");
        var income_commission_chart = echarts.init(domIncomeCommisionChart);
        income_commission_chart.setOption(
                option = {
                    // title: {
                    //     text: 'Income vs Commission',
                    //     subtext: 'Graph Sub-text'
                    // },
                    tooltip: {
                        trigger: 'axis'
                    },
                    legend: {
                        data: ['Income', 'Commission']
                    },
                    toolbox: {
                        show: false
                    },
                    calculable: false,
                    xAxis: [{
                        type: 'category',
                        data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                    }],
                    yAxis: [{
                        type: 'value'
                    }],
                    series: [{
                        name: 'Income',
                        type: 'bar',
                        data: [44500, 44500, 60800, 59300, 113339.5, 45445.45, 75898.9, 31346.6, 39733.55, 36816.6, 48272.2, 64250.75]
                    }, {
                        name: 'Commission',
                        type: 'bar',
                        data: [1764, 1751, 3900, 2480, 3843.5, 1957.55, 3337.1, 1397.4, 1323.45, 1227.4, 2675.8, 2554.25]
                    }]
                }, true
        );

        var domIncomeChart = document.getElementById("income_chart");
        var income_chart = echarts.init(domIncomeChart);
        income_chart.setOption(
                option = {
                    tooltip: {
                        trigger: 'item',
                        formatter: '{a} <br/>{b}: {c} ({d}%)'
                    },
                    legend: {
                        orient: 'vertical',
                        left: 10,
                        data: ['Paid', 'Approved', 'Pending']
                    },
                    series: [
                        {
                            name: 'Income',
                            type: 'pie',
                            radius: ['50%', '70%'],
                            avoidLabelOverlap: false,
                            label: {
                                show: false,
                                position: 'center'
                            },
                            emphasis: {
                                label: {
                                    show: true,
                                    fontSize: '30',
                                    fontWeight: 'bold'
                                }
                            },
                            labelLine: {
                                show: false
                            },
                            data: [
                                {value: 335, name: 'Paid'},
                                {value: 310, name: 'Approved'},
                                {value: 234, name: 'Pending'}
                            ]
                        }
                    ]
                }, true
        );
        jQuery(document).ready(function ($) {
        });
    </script>

@endsection