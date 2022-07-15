<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
     <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css"> 
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pr o:300,400,400i,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
<style>

    .error{
        color: red;
    }
    #scrolltotop {
        position: fixed;
        right: 10px;
        bottom: 10px;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        background: #e62739;
        box-shadow: 0 0 10px rgb(0, 0, 0, 0.25);
        color: whitesmoke;
        border: none;
        outline: none;
        cursor: pointer;
        display: none;
    }

    #scrolltotop:active {
        background: #cc2333;
    }

</style>
</head>

<body class="hold-transition sidebar-mini" style="font-family:Arial, Helvetica, sans-serif">
    <div class="wrapper">

        <!-- Navbar -->
        @include('user.nav-bar-user')
        <!-- /.navbar -->

        <!-- content -->
        @yield('content')
        <!--/.content  -->

        <!-- footer -->
        @include('user.footer-user')
        <!-- /.footer -->

    </div>
  
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"> </script>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <!-- page script -->
    @yield('script-section')
</html>