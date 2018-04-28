<?php
/**
 * Created by PhpStorm.
 * User: ronen
 * Date: 28/04/2018
 * Time: 10:49
 */?>


<html>
<head>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/custom.js"></script>
    <title>@yield('title')</title>
</head>
<body>

@section('sidebar')
@show

<div class="container">
    @yield('content')

    @section('footer')
        <footer class="footer text-muted text-xs-center text-md-left bg-inverse">
            <div class="container">
                <ul class="footer-links">
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">DMCA</a></li>
                </ul>
                <p>© 2018 - All rights reserved.</p>
            </div>
        </footer>
    @show
</div>


</body>
</html>
