<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Universidad</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('asset/adminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('asset/adminLTE/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
     <!--Inicio Header-->
      @include('theme/lte/header')
     <!--Fin Header-->

     <!--Inicio Aside-->
     @include('theme/lte/aside')
     <!--Fin Aside-->

      <div class="content-wrapper">
        <section class="content">
            <!--Contenido-->
            @yield('contenido')            
            <!--Fin Contenido-->         
        </section>
      </div>
  <!-- /.content-wrapper -->
  <!--Inicio Footer-->
     @include('theme/lte/footer')
  <!--Fin Footer-->
    </div>
    <script src="{{asset('asset/adminLTE/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('asset/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('asset/adminLTE/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('asset/adminLTE/dist/js/demo.js')}}"></script>
  </body>
</html>