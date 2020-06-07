@extends('layouts.backend')

@section('page-title')
Genealogy Tree
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
<a href="{{ route('user.network.downline') }}" class="btn btn-secondary btn-sm rounded-0 mb-10"><i class="fa fa-forward"></i> Downline Members</a>
<div class="x_panel">
    <div class="x_content">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" name="user_name" id="user_name" placeholder="MOS170549" value="MOS170549">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary rounded-0">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div id="chart-container"></div>
    </div>
</div>
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('admin/vendors/OrgChart/css/jquery.orgchart.css') }}">
<style type="text/css">
    #chart-container {
        position: relative;
        display: inline-block;
        top: 10px;
        left: 10px;
        width: calc(100% - 24px);
        border: 2px dashed #aaa;
        border-radius: 5px;
        overflow: auto;
        text-align: center;
    }
    .orgchart .second-menu-icon {
        transition: opacity .5s;
        opacity: 0;
        right: -5px;
        top: -5px;
        z-index: 2;
        position: absolute;
    }
    .orgchart .second-menu-icon::before { background-color: rgba(68, 157, 68, 0.5); }
    .orgchart .second-menu-icon:hover::before { background-color: #449d44; }
    .orgchart .node:hover .second-menu-icon { opacity: 1; }
    .orgchart .node .second-menu {
        display: none;
        position: absolute;
        top: 0;
        right: -70px;
        border-radius: 35px;
        box-shadow: 0 0 10px 1px #999;
        background-color: #fff;
        z-index: 1;
    }
    .orgchart .node .second-menu .avatar {
        width: 60px;
        height: 60px;
        border-radius: 30px;
        float: left;
        margin: 5px;
    }
</style>
@endsection
@section('script')
<script src="{{ asset('admin/vendors/OrgChart/js/jquery.orgchart.js') }}"></script>
  <script type="text/javascript">
    $(function() {

    var datascource = {
      'id': '1',
      'name': 'Lao Lao',
      'title': 'general manager',
      'children': [
        { 'id': '2', 'name': 'Bo Miao', 'title': 'department manager' },
        { 'id': '3', 'name': 'Su Miao', 'title': 'department manager',
          'children': [
            { 'id': '4', 'name': 'Tie Hua', 'title': 'senior engineer' },
            { 'id': '5', 'name': 'Hei Hei', 'title': 'senior engineer',
              'children': [
                { 'id': '6', 'name': 'Pang Pang', 'title': 'engineer' },
                { 'id': '7', 'name': 'Xiang Xiang', 'title': 'UE engineer' }
              ]
            }
          ]
        },
        { 'id': '8', 'name': 'Yu Jie', 'title': 'department manager' },
        { 'id': '9', 'name': 'Yu Li', 'title': 'department manager' },
        { 'id': '10', 'name': 'Hong Miao', 'title': 'department manager' },
        { 'id': '11', 'name': 'Yu Wei', 'title': 'department manager' },
        { 'id': '12', 'name': 'Chun Miao', 'title': 'department manager' },
        { 'id': '13', 'name': 'Yu Tie', 'title': 'department manager' }
      ]
    };

    $('#chart-container').orgchart({
      'data' : datascource,
      'visibleLevel': 4,
      'nodeContent': 'title',
      'nodeID': 'id',
      'createNode': function($node, data) {
        var secondMenuIcon = $('<i>', {
          'class': 'oci oci-info-circle second-menu-icon',
          click: function() {
            $(this).siblings('.second-menu').toggle();
          }
        });
        var dir = "{{ asset('admin/vendors/OrgChart/')}}";
        var secondMenu = '<div class="second-menu"><img class="avatar" src="'+dir+'/img/avatar/' + data.id + '.jpg"></div>';
        $node.append(secondMenuIcon).append(secondMenu);
      }
    });

  });
  </script>
@endsection