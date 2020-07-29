@extends('layouts.backend')

@section('page-title')
    Payout Release
@endsection
@section('sidebar')
    @include('user.menu')
@endsection
@section('content')
    <div class="table-responsive bg-white mb-30">
        <table class="table table-bordered mb-0">
            <thead>
            <tr>
                <th>Member Name</th>
                <th>Payout Amount</th>
                <th>Payout Method</th>
                <th>Payout Type</th>
                <th>E-wallet Balance</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>sam  <span>(<a target="_blank" href="#" class="btn-link text-primary">INF170549</a>)</span></td>
                <td><input type="text" class="payout_amount form-control" name="payout_amount[INF170549]" id="payout_amount0" value="21311.56"></td>
                <td>BKash</td>
                <td>Manual</td>
                <td>1347272713.00</td>
            </tr>
            <tr>
                <td>sam  <span>(<a target="_blank" href="#" class="btn-link text-primary">INF170549</a>)</span></td>
                <td><input type="text" class="payout_amount form-control" name="payout_amount[INF170549]" id="payout_amount0" value="21311.56"></td>
                <td>BKash</td>
                <td>Manual</td>
                <td>1347272713.00</td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection
