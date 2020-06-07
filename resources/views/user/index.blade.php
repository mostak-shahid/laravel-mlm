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
                    <h5>Commision Earned</h5>
                    <p>Lorem ipsum psdea itgum rixt.</p>
                    <a class="hidden-link" href="{{ route('user.wallet.earnings') }}">Read More</a>
                </div>
            </div> 
            <div class="col-6 mb-30">
                <div class="tile-stats position-relative h-100 text-center rounded-0">
                    <div class="count">179</div>
                    <h5>Payout Released</h5>
                    <p>Lorem ipsum psdea itgum rixt.</p>
                    <a class="hidden-link" href="{{ route('user.report.payout') }}">Read More</a>
                </div>
            </div>
            <div class="col-6 mb-30">
                <div class="tile-stats position-relative h-100 text-center rounded-0">
                    <div class="count">179</div>
                    <h5>Payout Pending</h5>
                    <p>Lorem ipsum psdea itgum rixt.</p>
                    <a class="hidden-link" href="{{ route('user.wallet.payout.status') }}">Read More</a>
                </div>
            </div> 
            <div class="col-6 mb-30">
                <div class="tile-stats position-relative h-100 text-center rounded-0 bg-success text-white">
                    <div class="count">179</div>
                    <h5>Total Sales</h5>
                    <p>Lorem ipsum psdea itgum rixt.</p>
                    <a class="hidden-link" href="{{ route('user.wallet.earnings') }}">Read More</a>
                </div>
            </div> 
            <div class="col-12">
                <div class="tile-stats position-relative h-100 rounded-0">
                <div class="icon"><i class="fa fa-money"></i>
                          </div>
                    <div class="count">179</div>
                    <h3>E-Wallet</h3>
                    <p>Lorem ipsum psdea itgum rixt.</p>
                    <a class="hidden-link" href="{{ route('user.wallet.statement') }}">Read More</a>
                </div>
            </div>        
        </div>    
    </div>
    <div class="col-lg-6 mb-30">
        <div class="x_panel h-100">
            <div id="joining_chart" style="height:100%;"></div>
        </div>
    </div>
    <div class="col-lg-6 mb-30">
        <div class="x_panel h-100">
            <div class="media">
                <img src="{{ asset('admin/production/images/img.jpg') }}" alt="{{ Auth::user()->name }}" class="img-circle align-self-center mr-3">
                <div class="media-body align-self-center">
                    <h5 class="mt-0">{{ Auth::user()->name }}</h5>
                    <p class="current-package">Current Package: <strong class="text-dark">Product 1</strong></p>
                    <a href="{{ route('user.authentication.profile') }}" class="text-dark">View Profile</a>
                </div>
            </div>
            <div class="pt-3">
                <p>Sponsor Name : <span class="text-primary">binaryecom </span></p>
                <p>Placement Username : <span class="text-primary">binaryecom </span></p>
                <p>Personal PV : <span class="text-primary">72</span></p>
                <p class="mb-0">Group PV : <span class="text-primary">400</span></p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-30">
        <div class="x_panel h-100"><div id="income_chart" style="height:100%"></div></div>
    </div>
    <div class="col-lg-6 mb-30">
        <div class="x_panel h-100">
            <div class="x_title">Earnings &amp; Expenses</div>
            <nav class="nav mos-left-tab-nav">
                <a class="nav-link active" id="earnings-tab" data-toggle="tab" href="#earnings" role="tab" aria-controls="earnings" aria-selected="true">Earnings</a>
                <a class="nav-link" id="expenses-tab" data-toggle="tab" href="#expenses" role="tab" aria-controls="expenses" aria-selected="false">Expenses</a>
                <a class="nav-link" id="payout-tab" data-toggle="tab" href="#payout" role="tab" aria-controls="payout" aria-selected="false">Payout Status</a>
            </nav>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="earnings" role="tabpanel" aria-labelledby="earnings-tab">
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
                <div class="tab-pane fade" id="expenses" role="tabpanel" aria-labelledby="expenses-tab">
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
                <div class="tab-pane fade" id="payout" role="tabpanel" aria-labelledby="payout-tab">
                    <div class="table-responsive">
                        <table class="table table-align-middle">
                            <tbody>
                                <tr>
                                    <td>REQUESTED</td>
                                    <td>
                                        <span class="text-primary">  128</span> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>APPROVED</td>
                                    <td>
                                        <span class="text-primary">  150</span> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>PAID</td>
                                    <td>
                                        <span class="text-success">  150</span> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>REJECTED</td>
                                    <td>
                                        <span class="text-danger">  18</span> 
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
                <a class="nav-link active" id="earners-tab" data-toggle="tab" href="#earners" role="tab" aria-controls="earners" aria-selected="true">Top Earners</a>
                <a class="nav-link" id="recruiters-tab" data-toggle="tab" href="#recruiters" role="tab" aria-controls="recruiters" aria-selected="false">Top Recruiters</a>
                <a class="nav-link" id="package-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package" aria-selected="false">Package Overview</a>
            </nav>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="earners" role="tabpanel" aria-labelledby="earners-tab">No Data Found</div>
                <div class="tab-pane fade" id="recruiters" role="tabpanel" aria-labelledby="recruiters-tab">No Data Found</div>
                <div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="package-tab">
                    <div class="table-responsive">
                        <table class="table table-align-middle">
                            <tbody>
                                <tr>
                                    <td><h5 class="text-md">Product 1</h5><p>You have 8 Product 1 package purchases in your team. </p></td>
                                    <td>
                                        <span class="text-primary">  8</span> 
                                    </td>
                                </tr>
                                <tr>
                                    <td><h5 class="text-md">Product 2</h5><p>You have 10 Product 2 package purchases in your team. </p></td>
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
    <div class="col-lg-12 mb-30">
        <div class="x_panel h-100">            
            <div class="x_title">Latest News</div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="{{ asset('admin/production/images/cropper.jpg') }}" class="img-fluid card-img-top" alt="News title">
                        <div class="card-body">
                            <h5 class="card-title">News title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-sm btn-primary rounded-0">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="{{ asset('admin/production/images/cropper.jpg') }}" class="img-fluid card-img-top" alt="News title">
                        <div class="card-body">
                            <h5 class="card-title">News title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-sm btn-primary rounded-0">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="{{ asset('admin/production/images/cropper.jpg') }}" class="img-fluid card-img-top" alt="News title">
                        <div class="card-body">
                            <h5 class="card-title">News title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-sm btn-primary rounded-0">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="{{ asset('admin/production/images/cropper.jpg') }}" class="img-fluid card-img-top" alt="News title">
                        <div class="card-body">
                            <h5 class="card-title">News title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-sm btn-primary rounded-0">Read More</a>
                        </div>
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
        var domJoiningChart = document.getElementById("joining_chart");
        var joining_chart = echarts.init(domJoiningChart);
        joining_chart.setOption(
            option = {
                /*title: {
                    text: 'Joining Chart'
                },*/
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'cross',
                        label: {
                            backgroundColor: '#6a7985'
                        }
                    }
                },
                legend: {
                    data: ['Left Joining', 'Right Joining', 'Joining Match']
                },
                toolbox: {
                    feature: {
                        restore: {
                            show: true,
                            title: "Restore"
                        },
                        saveAsImage: {
                            show: true,
                            title: "Save Image"
                        }
                    }
                },
                grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                xAxis: [
                    {
                        type: 'category',
                        boundaryGap: false,
                        data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July']
                    }
                ],
                yAxis: [
                    {
                        type: 'value'
                    }
                ],
                series: [
                    {
                        name: 'Left Joining',
                        type: 'line',
                        smooth: true,
                        areaStyle: {},
                        data: [120, 132, 101, 134, 90, 230, 210]
                    },
                    {
                        name: 'Right Joining',
                        type: 'line',
                        smooth: true,
                        areaStyle: {},
                        data: [220, 182, 191, 234, 290, 330, 310]
                    },
                    {
                        name: 'Joining Match',
                        type: 'line',
                        smooth: true,
                        label: {
                            normal: {
                                show: true,
                                position: 'top'
                            }
                        },
                        areaStyle: {},
                        data: [150, 232, 201, 154, 190, 330, 410]
                    }
                ]
            },true
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
                  data: ['Re-Purchase', 'Sponsor', 'Generation', 'Match', 'Royalty']
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
                          {value: 335, name: 'Re-Purchase'},
                          {value: 310, name: 'Sponsor'},
                          {value: 234, name: 'Generation'},
                          {value: 135, name: 'Match'},
                          {value: 1548, name: 'Royalty'}
                      ]
                  }
              ]
            }, true
        );        
        jQuery(document).ready(function($){
        });
    </script>

@endsection