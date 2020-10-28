@extends('dashboard.metronic')
@section('title', 'الصفحة الرئيسية')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">
@endsection
<!-- END CSS -->

@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="#">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> لوحة التحكم
    <small>لوحة التحكم &amp; الأحصائيات</small>
</h3>
<!-- END PAGE TITLE-->
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="">2</span>
                </div>
                <div class="desc"> Users </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="">1</span></div>
                <div class="desc"> Products </div>
            </div>
        </a>
    </div>
    {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="">1</span>
                </div>
                <div class="desc"> News </div>
            </div>
        </a>
    </div> --}}
    {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="">2</span></div>
                <div class="desc"> Team </div>
            </div>
        </a>
    </div>
</div> --}}
<div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/js/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>

</script>
@endsection
<!-- END SCRIPTS -->
