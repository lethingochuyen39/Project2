<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

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

</html>