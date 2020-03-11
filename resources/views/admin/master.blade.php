<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/ico" href="{{asset('images/favicon.jpg')}}">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('css/back/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('css/back/ionicons.min.css')}}">
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="css/back/jquery-jvectormap.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/back/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('css/back/_all-skins.min.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('css/back/blue.css')}}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@yield('content')

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('js/back/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('js/back/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('js/back/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/back/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('js/back/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap  -->
<!-- <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- SlimScroll -->
<script src="{{asset('js/back/jquery.slimscroll.min.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/back/demo.js')}}"></script>
<script src="{{asset('js/back/icheck.min.js')}}"></script>
<script src="{{asset('js/back/ckeditor.js')}}"></script>

<script>
     $(function () {
       // Replace the <textarea id="editor1"> with a CKEditor
       // instance, using default configuration.
       CKEDITOR.replace('editor1')
       //bootstrap WYSIHTML5 - text editor
       $('.textarea').wysihtml5()
     })
</script>

@yield('script')
</body>
</html>
