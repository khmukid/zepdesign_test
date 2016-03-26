<?php
/**
 * Created by PhpStorm.
 * User: mukid
 * Date: 3/25/2016
 * Time: 6:25 PM
 */
?>
<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZepDesign Login Form</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    {!! Html::style('content/bootstrap/css/bootstrap.css') !!}
    {!! Html::style('content/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('content/css/form-elements.css') !!}
    {!! Html::style('content/css/style.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>ZepDesign</strong> Login Form</h1>
                    <div class="description">
                        <p>
                            This is a test application design and developent by
                            <a href="http://mukid.me"><strong>Mukid,Khandaker</strong></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>
                            <p>Enter your email and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" method="POST" action="/auth/login" class="login-form">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="sr-only" for="form-email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                <!--input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username"-->
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" >
                                <!--input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password"-->
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember"> Remember Me
                            </div>
                            <button type="submit" class="btn">Sign in!</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- Javascript -->
{!! Html::script('content/js/jquery-1.10.2.min.js') !!}
{!! Html::script('content/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('content/js/scripts.js') !!}

</body>

</html>






{{--<form method="POST" action="/auth/login">--}}
    {{--{!! csrf_field() !!}--}}

    {{--<div>--}}
        {{--Email--}}
        {{--<input type="email" name="email" value="{{ old('email') }}">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--Password--}}
        {{--<input type="password" name="password" id="password">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--<input type="checkbox" name="remember"> Remember Me--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--<button type="submit">Login</button>--}}
    {{--</div>--}}
{{--</form>--}}
