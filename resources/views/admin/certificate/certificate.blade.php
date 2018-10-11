@extends('layout.admin.master')

@section('styles')
    <!-- DataTables CSS -->
    <link href="{{asset('assets/admin/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{asset('assets/admin/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('assets/admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">
@endsection

@section('content')
    <!-- DataTables CSS -->
    <link href="{{asset('assets/admin/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{asset('assets/admin/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">


	<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Certificates Record</h2>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S/No</th>
                                        <th>Cert Number</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Grade</th>
                                        <th>Create Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($certificates as $certificate)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $certificate->certnumber }}</td>
                                        <td>{{ $certificate->firstname }}</td>
                                        <td>{{ $certificate->lastname }}</td>
                                        <td>{{ $certificate->grade }}</td>
                                        <td>{{ $certificate->created_at }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-xs"><span class="fa fa-eye"></span></a>
                                            <a href="{{ route('certificates.edit', $certificate->id) }}" class="btn btn-warning btn-xs"><span class="fa fa-pencil"></span></a>
                                            <form id="del-form-{{ $certificate->id }}" method="post" action="{{ route('certificates.destroy', $certificate->id) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <a href="" onclick="
                                                if(confirm('Are you sure you want to delete this?'))
                                                {
                                                    event.preventDefault();
                                                    document.getElementById('del-form-{{ $certificate->id }}').submit();
                                                }
                                                else{
                                                    event.preventDefault();
                                                }" class="btn btn-danger btn-xs">
                                                <span class="fa fa-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
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
    <!-- DataTables JavaScript -->
    <script src="{{asset('assets/admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
@endsection
