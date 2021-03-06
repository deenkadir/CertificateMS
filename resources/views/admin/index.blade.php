@extends('layout.admin.master')

@section('styles')
	

	<!-- Morris Charts CSS -->
	<link href="{{asset('assets/admin/vendor/morrisjs/morris.css')}}" rel="stylesheet">
@endsection

@section('content')
	<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-book fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$certificates}}</div>
                                <div>Certificates</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <a href="{{ url('admin/certificates') }}" class="pull-left">View Details</a>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">12</div>
                                <div>New Tasks!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
@endsection

@section('scripts')
	<!-- Morris Charts JavaScript -->
    <script src="{{asset('assets/admin/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/morrisjs/morris.min.js')}}"></script>
    <script src="{{asset('assets/admin/data/morris-data.js')}}"></script>
@endsection