<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>@yield('title')</title>
          <!-- Tell the browser to be responsive to screen width -->
          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <!-- Bootstrap 3.3.6 -->
          <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
          <!-- Font Awesome -->
          <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
          <!-- Ionicons -->
          <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css') }}">
          <!-- Theme style -->
          <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
          <!-- AdminLTE Skins. Choose a skin from the css/skins
               folder instead of downloading all of them to reduce the load. -->
          <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
     </head>
<body class="hold-transition skin-purple sidebar-mini">

     
          @include('layouts.navigation')
          @include('layouts.sidebar')
          
          <div class="content-wrapper">
               @yield('content')
          </div>

     <script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
     <!-- Bootstrap 3.3.6 -->
     <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
     <!-- SlimScroll -->
     <script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
     <!-- FastClick -->
     <script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
     <!-- AdminLTE App -->
     <script src="{{ asset('dist/js/app.min.js') }}"></script>
     <!-- AdminLTE for demo purposes -->
     <script src="{{ asset('dist/js/demo.js') }}"></script>

</body>
     
</html>