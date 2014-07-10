<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
                    <li>{{ HTML::link('areas', 'Area') }}</li>
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

                    <li class="divider"></li>
                    <li><a href="#">Send Data</a></li>
                    <li><a href="#">Send Scheme Data</a></li>
                    <li><a href="#">Send MAster Files</a></li>
                    <li><a href="#">E-mail</a></li>

                    <li class="divider"></li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Receive</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Stock From Branch</a></li>
                            <li><a href="#">Exp./Brk. From Branch</a></li>
                        </ul>
                    </li>

                    <li class="divider"></li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brackage/Expiry Manager</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Returns Entry</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Customer Returns Advice</a></li>
                            <li><a href="#">Company Challan</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Customer Return Advice Copy</a></li>
                            <li><a href="#">Company Advice Copy</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Companywise Pending</a></li>
                            <li><a href="#">Companywise Returns</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Customerwise Returns</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Return Advice Cancellation</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Edit Company Challan</a></li>
                        </ul>
                    </li>

                    <li class="divider"></li>
                    <li><a href="#">Purchase Return</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Order</a></li>
                    <li><a href="#">Order Initialization</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Pending Order</a></li>
                    <li><a href="#">Initialize Short Item List...</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Duplicate Copy</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
                <ul class="dropdown-menu">

                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sales</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Journal</a></li>
                            <li><a href="#">List</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Company Wise</a></li>
                            <li><a href="#">Townwise</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Areawise</a></li>
                            <li><a href="#">Areawise Productwise</a></li>
                            <li><a href="#">Areawise Companywise</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Repwise Billwise</a></li>
                            <li><a href="#">Repwise</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Customerwise</a></li>
                            <li><a href="#">Customerwise Billwise</a></li>
                            <li><a href="#">Customerwise Monthly Sales</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Free Without Free Stock</a></li>
                            <li><a href="#">Under Rated</a></li>
                        </ul>
                    </li>

                    <li class="divider"></li>
                    <li><a href="#">Delivery Reports</a></li>

                    <li class="divider"></li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Purchase</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">List</a></li>
                            <li><a href="#">Supplierwise</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Replacement List</a></li>
                            <li><a href="#">Supplierwise Replacement</a></li>
                        </ul>
                    </li>

                    <li class="divider"></li>
                    <li><a href="#">Locked Products....</a></li>
                    <li><a href="#">Pending Delivery Notes....</a></li>
                    <li><a href="#">Rate Edited Products....</a></li>

                    <li class="divider"></li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stock</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Stock & Sale Statement</a></li>
                            <li><a href="#">Combined Stock and Sales Statement</a></li>
                            <li><a href="#">Companywise Stock Value</a></li>
                            <li><a href="#">Closing Stock Statement</a></li>
                            <li><a href="#">Stock Ledger</a></li>
                            <li><a href="#">Expiry Forcast</a></li>
                            <li><a href="#">Shortage Items In Store</a></li>
                        </ul>
                    </li>

                    <li class="divider"></li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master List</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Customer List</a></li>
                            <li><a href="#">Company List</a></li>
                            <li><a href="#">Products List</a></li>
                            <li><a href="#">Rep List</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Price List</a></li>
                    <li><a href="#">Scheme Circular</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Quick View</a></li>
                    <li><a href="#">SPG Graph</a></li>
                    <li><a href="#">Company Sales Graph</a></li>

                </ul>
            </li>

            <li><a href="#">Monthly Closing</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Backup</a></li>
                    <li><a href="#">Restore</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Change System Date</a></li>
                    <li><a href="#">Previous Months Data</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Refresh Stock</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Message Settings</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Options</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Set Scheme Data</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Find & Delete Old Products</a></li>

                    <li class="divider"></li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts Options</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Set Unit Name</a></li>
                            <li><a href="#">Account Posting Heads</a></li>
                        </ul>
                    </li>

                    <li class="divider"></li>
                    <li><a href="#">Tax Change</a></li>

                </ul>
            </li>


            <li><a href="#">About</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right">


            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account
                    <b class="caret"></b></a>
                <ul class="dropdown-menu dropdown-menu-account">
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