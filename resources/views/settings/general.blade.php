@extends('layouts.backend')

@section('page-title')
    General Settings
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')

    <div class="x_panel">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <form class="demo-form">
                    <div class="form-group">
                        <label for="service_charge">Service Charge (%) <span class="text-danger">*</span></label>
                        <input class="form-control" type="number" name="service_charge" id="service_charge" value="10" required>
                    </div>
                    <div class="form-group">
                        <label for="trans_fee">Transaction Fee (%) <span class="text-danger">*</span></label>
                        <input class="form-control" type="number" name="trans_fee" id="trans_fee" value="10" required>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
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