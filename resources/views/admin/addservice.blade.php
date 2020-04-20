@extends('admin.master')
@section('title'){{$title}}@stop
@section('style')
  <link rel="stylesheet" href="{{asset('css/back/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@stop
@section('content')
  <header class="main-header">

    <!-- Logo -->
    <a href="{{route('home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>1</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>A1</b>Network</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
  @include('admin.layout.topnav')
  </header>
   @include('admin.layout.sidenav')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <section class="content-header">
      <h1>
        Service Section
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Services</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <center>
                    @if (session('success'))
                    <div class="alert alert-success">
                    {{ session('success') }}
                    </div>
                @endif
    <section class="content">
      <div class="row">
      
        <div class="col-md-6">
          <div class="box box-info">
          <form method="post">
            @csrf
            <div class="box-body">

              <h4>Add Contents</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                <input type="text" class="form-control" name="shead" placeholder="Service Headings">
              </div>
              <br>
              <div class="input-group">
                  
                  <textarea id="editor1" name="details" rows="3" cols="3">
                        Add Details Here                   
                  </textarea>
              </div>
              <!-- /input-group -->
            </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
      
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
    </center>
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

@stop
