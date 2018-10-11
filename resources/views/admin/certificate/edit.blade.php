@extends('layout.admin.master')

@section('styles')
	
@endsection

@section('content')
	<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Create Certificate</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                @if(count($errors) > 0)
                                    @foreach($errors->all() as $error)
                                        <p class="alert alert-danger">{{ $error }}</p>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <form role="form" action="{{route('certificates.update', $certificate->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label for="certnumber">Certificate No.</label>
                                        <input class="form-control" type="text" name="certnumber" readonly="" value="{{ $certificate->certnumber }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input class="form-control" placeholder="Student Firstname" type="text" name="firstname" value="{{ $certificate->firstname }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input class="form-control" placeholder="Lastname" type="text" name="lastname" value="{{ $certificate->lastname }}">
                                    </div>
                                    @php
                                        $grades = array("outstanding", "excellent" ,"good", "average", "satisfactory");
                                    @endphp
                                    <div class="form-group">
                                        <p>{{$grades[0]}}</p>
                                        <label for="grade">Grade</label>
                                        <select class="form-control" name="grade">
                                            @foreach($grades as $grade)
                                                <option value="{{$grade}}">
                                                    {{-- @if ($certificate->grade == $grade)
                                                    selected
                                                    @endif --}}        
                                                </option>
                                            @endforeach
                                            {{-- <option 
                                                @if($certificate->grade = "distinction")selected 
                                                value="distinction"
                                                >Distinction</option>
                                            <option 
                                                @elseif($certificate->grade = "excellent")selected
                                                value="excellent"
                                                >Excellent</option>
                                            <option
                                                @elseif($certificate->grade = "good")selected
                                                value="good"
                                                {{'selected'}}
                                                >Good</option>
                                            <option 
                                                @elseif($certificate->grade = "average")selected
                                                value="average"
                                                >Average</option>
                                            <option
                                                @elseif($certificate->grade = "satisfactory")selected
                                                value="satisfactory"
                                                >Satisfactory</option>
                                                @endif --}}
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label>Text area</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default">Create</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
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