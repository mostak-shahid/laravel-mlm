@extends('layouts.backend')
@section('page-title')
    Order Details
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')
    @if(Auth::user()->admin)
    <form class="form-inline float-left mb-10">
        <select id="order_status" name="order_status" class="custom-select">
            <option value="pending" selected="selected">Pending payment</option>
            <option value="processing">Processing</option>
            <option value="on-hold">On hold</option>
            <option value="completed">Completed</option>
            <option value="cancelled">Cancelled</option>
            <option value="refunded">Refunded</option>
            <option value="failed">Failed</option>
        </select>
        <button class="btn btn-success rounded-0 mb-0 mr-0">Submit</button>
    </form>
    @endif
    <button class="btn btn-secondary rounded-0 mb-10 mr-0 float-right btn-print"><i class="fa fa-print"></i> Print</button>
<div class="x_panel">
    <div id="printThis" class="x_content">
        <h3>Order ID: <span class="text-purple">#0000248 </span></h3>
        <p>Order #<mark class="order-number">0000248</mark> was placed on <mark class="order-date">19 Nov 19</mark> and is currently <mark class="order-status">On hold</mark>.</p>
        <hr>
        <p><strong>Date Added:</strong> 02-11-2020</p>
        <p><strong>Payment Method:</strong> Cash on delivery</p>
        <p><strong>Shipping Method:</strong> Flat Shipping Rate</p>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <h2>Payment Address</h2>
                <strong>sam </strong>
                <div class="address">
                    Your Address,City, District, Country
                </div>
            </div>
            <div class="col-lg-6">
                <h2>Shipping Address</h2>
                <strong>sam </strong>
                <div class="address">
                    Your Address,City, District, Country
                </div>
            </div>
        </div>
        <hr>
        <h2><strong>Order Products</strong></h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Samsung Galaxy Tab 10.1</td>
                <td>1</td>
                <td>0.05542143 </td>
                <td>0.05542143 </td>
            </tr>

            <tr>
                <th colspan="3">Sub Total</th>
                <td>0.05542143</td>
            </tr>
            <tr>
                <th colspan="3">Flat Shipping Rate</th>
                <td>0.00138561</td>
            </tr>
            <tr>
                <th colspan="3">Total</th>
                <td>0.05680704</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
