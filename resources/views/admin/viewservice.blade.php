
@extends('admin.master')
@section('title'){{$title}}@stop
@section('style')
  <link rel="stylesheet" href="{{asset('css/back/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/back/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@stop
@section('content')

  <header class="main-header">
        
    <a href="{{route('home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>1</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>A1</b>Network</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    @include('admin.layout.topnav')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layout.sidenav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Index</th>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                </tr>
                </thead>
                @foreach($sections as $key=>$section)
                <tbody>
   
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$section->shead}}</td>
                  <td>{{$section->details}}</td>
                  <td></td>
                  
                </tr>
                @endforeach
                </tbody>

    
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

 
  <div class="control-sidebar-bg"></div>
@stop
@section('script')



<!-- DataTables -->
<script src="{{asset('js/back/jquery.dataTables.min.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@stop
<!-- ./wrapper -->


