<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Amrut</title>
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

    <!--include navbar layout file-->
        @include('layout.navbar')

        <div class="container container-full">
            @if(Session::has('message'))
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{ Session::get('message') }}</strong>
                </div>
            @endif
            <!-- Example row of columns -->
                @yield('content')
        </div> <!-- /container -->

<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!--        <script>window.jQuery || document.write("{{ HTML::script('packages/jquery/jquery.js') }}")</script>-->
        {{ HTML::script('packages/jquery/jquery.js')}}
        {{ HTML::script('packages/bootstrap/js/bootstrap.min.js')}}
        {{ HTML::script('packages/js/main.js')}}
    </body>
</html>
