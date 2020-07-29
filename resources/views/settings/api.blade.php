@extends('layouts.backend')

@section('page-title')
    API Key Settings
@endsection
@section('sidebar')
@include('user.menu')
@endsection
@section('content')

    <div class="x_panel">
        <div class="row justify-content-center">
            <div class="col-auto">
                <form class="form-inline">
                    <input type="text" class="form-control mb-0 mr-sm-2" id="inlineFormInputName2" placeholder="API Key">
                    <button type="submit" class="btn btn-primary mb-0">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        jQuery(document).ready(function($){});
    </script>
@endsection