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
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">File <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Customer</a></li>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Supplier</a></li>
                    <li><a href="#">Salesman</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Rep</a></li>
                    <li><a href="#">Area</a></li>
                    <li><a href="#">Bank Area</a></li>
                    <li><a href="#">Town</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Bank</a></li>
                    <li><a href="#">Generic/Classification</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Web Rep.</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transactions <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Invoice</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Receipts</a></li>
                    <li><a href="#">Edit Old Receipts</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Branch Transfer</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Credit Note</a></li>
                    <li><a href="#">Debit Note</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Godown Challan</a></li>

                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">More options</a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">Second level</a></li>
                            <li class="dropdown-submenu">
                                <a href="#">More..</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">3rd level</a></li>
                                    <li><a href="#">3rd level</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Second level</a></li>
                            <li><a href="#">Second level</a></li>
                        </ul>
                    </li>

                    <li class="divider"></li>
                    <li><a href="#">Send Data</a></li>
                    <li><a href="#">Send Scheme Data</a></li>
                    <li><a href="#">Send MAster Files</a></li>
                    <li><a href="#">E-mail</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Closings <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Windows <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>

        </ul>

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