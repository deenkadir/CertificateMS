@extends('layout.admin.master')

@section('styles')
	
@endsection

@section('content')
	<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Certificate</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="flash-message">
                    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-'.$msg))
                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }} <a href="JavaScript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                    @endforeach
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Certificate Values
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                {{-- @if(count($errors) > 0)
                                    @foreach($errors->all() as $error)
                                        <p class="alert alert-danger">{{ $error }}</p>
                                    @endforeach
                                @endif --}}
                            </div>
                            <div class="col-lg-6">
                                <form role="form" action="{{route('certificates.store')}}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="certnumber">Certificate No.</label>
                                        <input class="form-control" type="text" name="certnumber" value="{{ $number }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input class="form-control" placeholder="Student Firstname" type="text" name="firstname" >
                                        @if($errors->has('firstname'))
                                            <p class="help-block alert alert-danger">firstname field can't be empty</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input class="form-control" placeholder="Lastname" type="text" name="lastname">
                                        @if($errors->has('lastname'))
                                            <p class="help-block alert alert-danger">lastname field can't be empty</p>
                                        @endif
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="lastname">Course of Study</label>
                                        <input class="form-control" placeholder="Lastname" type="text" name="lastname">
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="grade">Grade</label>
                                        <select class="form-control" name="grade">
                                            <option selected disabled>Select Grade</option>
                                            <option value="distinction">Distinction</option>
                                            <option value="excellent">Excellent</option>
                                            <option value="good">Good</option>
                                            <option value="average">Average</option>
                                            <option value="satisfactory">Satisfactory</option>
                                        </select>
                                        @if($errors->has('grade'))
                                            <p class="help-block alert alert-danger">grade field can't be empty</p>
                                        @endif
                                        </div>
                                    <button type="submit" class="btn btn-default">Create</button>
                                    <a href="{{ route('certificates.index') }}" type="button" class="btn btn-default">Cancel</a>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection

@section('scripts')
	<!-- Morris Charts JavaScript -->
    <script src="{{asset('assets/admin/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/morrisjs/morris.min.js')}}"></script>
    <script src="{{asset('assets/admin/data/morris-data.js')}}"></script>
@endsection