<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pr o:300,400,400i,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <style>
        .error {
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
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800, 800i, 900&display=swap');

        /* * {
    padding: 0;
    margin: 0;
    font-family: 'Poppins', sans-serif;
} */

        /* body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #131313;
} */


        #products {
            position: relative;
        }

        #products .card {
            position: relative;
            width: 320px;
            height: 320px;
            background: #232323;
            border-radius: 20px;
            overflow: hidden;
        }

        #products .card:before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #1BBFE9;
            clip-path: circle(150px at 80% 20%);
            transition: 0.5s ease-in-out;
        }

        #products .card:hover:before {
            clip-path: circle(300px at 80% -20%);
        }


        #products .card:after {
            position: absolute;
            top: 30%;
            left: -20%;
            font-size: 12em;
            font-weight: 800;
            font-style: italic;
            color: rgba(255, 255, 255, 0.04);

        }

        #products .card .imgBx {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
            width: 100%;
            height: 100%;
            transition: .5s;
        }

        #products .card:hover .imgBx {
            top: 0%;
            transform: translateY(-25%);
            /* bug  */
        }

        #products .card .imgBx img {
            position: absolute;
            left: -1.5%;
            width: 330px;
            height: 320px;
            border-radius: 10%;
        }

        #products .card .contentBx {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            text-align: center;
            transition: 1s;
            z-index: 90;
        }

        #products .card:hover .contentBx {
            height: 80px;
        }

        #products .card .contentBx small {
            position: relative;
            font-weight: 600;
            letter-spacing: 1px;
            color: #fff;
        }

        #products .card .contentBx .size,
        #products .card .contentBx .color {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px 20px;
            transition: .5s;
            opacity: 0;
            visibility: hidden;
        }

        #products .card .contentBx .size h3,
        #products .card .contentBx .color h3 {
            color: white;
            font-weight: 300;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-right: 10px;
        }

        #products .card .contentBx .size span {
            width: 26px;
            height: 26px;
            text-align: center;
            line-height: 26px;
            font-size: 14px;
            display: inline-block;
            color: #111;
            background: #fff;
            margin: 0 5px;
            transition: .5s;
            color: #111;
            border-radius: 4px;
            cursor: pointer;
        }


        /* #products .card .contentBx .color span:nth-child(2) {
     background: #1BBFE9;
}

#products .card .contentBx .color span:nth-child(3) {
     background: #1B2FE9;
}

#products a .card .contentBx .color span:nth-child(4) {
     background: #080481;
} */

        #Buy {
            display: inline-block;
            padding: 10px 20px;
            background: #fff;
            border-radius: 4px;
            margin-top: 10px;
            text-decoration: none;
            font-weight: 600;
            color: #111;
            opacity: 0;
            transform: translateY(50px);
            transition: .5s;
        }

        #Buy {
            opacity: 1;
            transform: translateY(0px);
            transition-delay: .7s;
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
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- page script -->
<script src="{{ asset('js/select2.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#brand").select2();
    });
    $(document).ready(function() {
        $("#category").select2();
    });
</script>

@yield('script-section')

</html>