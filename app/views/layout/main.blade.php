<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{ HTML::style('packages/bootstrap/css/bootstrap.min.css')}}
    <style>
        body {
            padding-bottom: 20px;
        }
    </style>
    {{ HTML::style('packages/css/main.css')}}

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Amrut</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if(!Auth::check())
            <ul class="nav navbar-nav">
                <li class="active"><a href="/users/login">Login</a></li>
            </ul>
            @endif
            @if(Auth::check())
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-content">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="http://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/twDq00QDud4/s120-c/photo.jpg"
                                             alt="Alternate Text" class="img-responsive" />
                                        <p class="text-center small">
                                            <a href="#">Change Photo</a></p>
                                    </div>
                                    <div class="col-md-7">
                                        <span>{{ Auth::user()->username }}</span>
                                        <p class="text-muted small">
                                            mail@gmail.com</p>
                                        <div class="divider">
                                        </div>
                                        <a href="#" class="btn btn-primary btn-sm active">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-footer">
                                <div class="navbar-footer-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-default btn-sm">Change Passowrd</a>
                                        </div>
                                        <div class="col-md-6">
                                            {{ HTML::link('users/logout', 'Sign Out', array('class'=>'btn btn-default btn-sm pull-right')) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        <strong>{{ Session::get('message') }}</strong>

    </div>
    @endif
    <!-- Example row of columns -->

        @yield('content')



</div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="packages/vendor/jquery-1.11.0.min.js"><\/script>')</script>

{{ HTML::script('packages/bootstrap/js/bootstrap.min.js')}}
{{ HTML::script('packages/js/main.js')}}
</body>
</html>
