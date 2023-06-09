<!DOCTYPE html>
<head>
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('backend/css') }}/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('backend/css') }}/style.css" rel='stylesheet' type='text/css' />
    <link href="{{ asset('backend/css') }}/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link rel="shortcut-icon" type="image/png" href="{{ asset('backend/images') }}/logo.png">
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('backend/css') }}/font.css" type="text/css" />
    <link href="{{ asset('backend/css') }}/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{ asset('backend/css') }}/jquery2.0.3.min.js"></script>
</head>

<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Sign In Now</h2>
            {{ session()->has('error1') ? session()->get('error1') : '' }}
            {{ session()->has('error2') ? session()->get('error2') : '' }}


            <form action="{{ url('/authenticate') }}" method="post">
                @csrf
                <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
                <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
                <div class="clearfix"></div>
                <input type="submit" value="Sign In" name="login">
                {{-- {{email}} --}}
            </form>
            {{ session()->has('admin_email') ? session()->get('admin_email') : '' }}
            {{ session()->has('admin_name') ? session()->get('admin_name') : '' }}
        </div>
    </div>
    <script src="{{ asset('backend/css') }}/bootstrap.js"></script>
    <script src="{{ asset('backend/css') }}/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{ asset('backend/css') }}/scripts.js"></script>
    <script src="{{ asset('backend/css') }}/jquery.slimscroll.js"></script>
    <script src="{{ asset('backend/css') }}/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ asset('backend/css') }}/flot-chart/excanvas.min.js">
    </script><![endif]-->
    <script src="{{ asset('backend/css') }}/jquery.scrollTo.js"></script>
</body>
</html>
