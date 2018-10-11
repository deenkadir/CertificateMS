@extends('layout.user.master')

@section('content')
	@include('user.includes.nav')
  
	<div class="row">
      <br>
      <br>
      <div class="container">
        <br>
        <center id="result">
          <div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
            <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
                   <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
                   <br>
                   <h3 style="color:green;">No.{{ $certificate->certnumber }}</h3>
                   <br>
                   <span style="font-size:25px"><i>This is to certify that</i></span>
                   <br><br>
                   <span style="font-size:30px"><b>{{ $certificate->firstname }} {{ $certificate->lastname }}</b></span><br/><br/>
                   {{-- <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
                   <span style="font-size:30px">$course.getName()</span> <br/><br/> --}}
                   <span style="font-size:20px">with grade of 
                    <br>
                    <b>{{ $certificate->grade }}</b></span> <br/><br/><br/><br/>
                   <span style="font-size:25px"><i>date</i></span><br>
                   {{ $certificate->created_at->diffForHumans() }}
                  <!-- <span style="font-size:30px">$dt</span> -->
            </div>
          </div>
        </center>
        <br>
        <div class="col-md-12 text-center">
          <button class="btn btn-primary">Back</button>
          <button class="btn btn-info" onclick="printResult();">Print</button>
        </div>
        
      </div>
      <script>
        function printResult(){
          let result = document.getElementById('result');
          result.print();
        }
      </script>
    @include('user.includes.footer')

@endsection