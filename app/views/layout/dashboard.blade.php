@extends('layout.main')

@section('title')
    dashboard
@stop

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 bhoechie-tab-menu">
            <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                    <h4 class="glyphicon glyphicon-plane"></h4><br/>Flight
                </a>
                <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-road"></h4><br/>Train
                </a>
                <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-home"></h4><br/>Hotel
                </a>
                <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Restaurant
                </a>
                <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Credit Card
                </a>

            </div>
        </div>
        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 bhoechie-tab">
            <!-- flight section -->
            <div class="bhoechie-tab-content active">
                <center>
                    <h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#55518a"></h1>
                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                    <h3 style="margin-top: 0;color:#55518a">Flight Reservation</h3>
                </center>
            </div>
            <!-- train section -->
            <div class="bhoechie-tab-content">
                <center>
                    <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#55518a"></h1>
                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                    <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
                </center>
            </div>

            <!-- hotel search -->
            <div class="bhoechie-tab-content">
                <center>
                    <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                    <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
                </center>
            </div>
            <div class="bhoechie-tab-content">
                <center>
                    <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#55518a"></h1>
                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                    <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
                </center>
            </div>
            <div class="bhoechie-tab-content">
                <center>
                    <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                    <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                </center>
            </div>
        </div>
    </div>
</div>

@stop