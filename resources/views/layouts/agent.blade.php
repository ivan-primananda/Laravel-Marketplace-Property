<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta name="description" content="Build Dreams Business Template" />
    <meta name="keywords" content="hotels,resturent,tour & travels,Real estate,responsive,agency" />
    <meta name="author" content="Logicsforest" />
    <title>Bajuale</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/master.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/heading-icon.png') }}">
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <style>
        .pending {
            position: absolute;
            left: 13px;
            top: 9px;
            background: #b600ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }
    </style>

    @yield('style')
</head>


<body>

<!-- Header Start -->
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <ul class="contactinfo">
                <li><a href="#"><i class="fa fa-phone-square"></i> +92 95 01 88 821</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> info@realestate.com</a></li>
                </ul>
            </div>
            <div class="col-md-5 text-right">
                <ul class="shop-menu">
                @if(session('login'))
                    <li hidden><a href="{{ url('register') }}"><i class="fa fa-unlock"></i> Register</a></li>
                    <li hidden><a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-lock"></i> Login</a></li>
                @else
                    <li><a href="{{ url('register') }}"><i class="fa fa-unlock"></i> Register</a></li>
                    <li><a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-lock"></i> Login</a></li>
                @endif
                </ul>
                <div class="topbar-social-icons"> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="$"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </div>
            </div>
        </div>
    </div>
</div>

<header id="navigation header-container-box" class="navigation affix-top menu-line" data-offset-top="2" data-spy="affix">
    <div class="container" id="menu-nav">
        <div class="row">
            <!-- logo -->
            <div class="col-md-3">
                <div class="logo"> <a href="{{ url('/') }}"><img alt="Logo" src="{{ asset('assets/images/logo.png') }}" id="logo-header"></a> </div>
            </div>
            
            <!-- Navbar -->
            <div class="col-md-7 col-md-offset-2"> 
                <a class="visible-xs" href="#mobile-menu" id="mobile-menu-button">
                    <i class="fa fa-bars"></i>
                </a>
                <nav id="navigation" style="float: right;">
                    <ul>
                        <li><a class="hvr-overline-from-center" href="{{ url('agent') }}">Home</a></li>
                        <li><a class="hvr-overline-from-center" href="{{ url('seller') }}">Jual Property</a></li>
                        @if(session('login'))
                            {{-- <li><a class="hvr-overline-from-center" href="{{ url('pesan') }}">Pesan</a></li> --}}
                            {{-- <li><a class="hvr-overline-from-center" href="{{ url('logout') }}">Log Out</a></li> --}}
                            <li>
                                <div class="dropdown">
                                    @if($jumlah != 0)
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ Session::get('full_name') }}
                                            <span class="new" style="background: red; border-radius: 50%; height: 10px; width: 10px; position: absolute;"></span>
                                        </button>
                                    @else
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ Session::get('full_name') }}
                                        </button>
                                    @endif
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ url('user/' .Session::get('id')) }}">Akun</a>
                                        @if($jumlah != 0)
                                            <a class="dropdown-item" href="{{ url('chat') }}">
                                                <div class="pesan">Pesan
                                                <span style="background: red; border-radius: 50%; height: 10px; width: 10px; position: absolute;"></span></div>
                                            </a>
                                        @else
                                            <a class="dropdown-item" href="{{ url('chat') }}">Pesan</a>
                                        @endif
                                        <a class="dropdown-item" href="{{ url('logout') }}">Log Out</a>
                                    </div>
                                </div>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle" aria-hidden="true"></i></span></button>
                </div>

            <div class="modal-body">
                <div class="form">
                    <!-- login -->
                    <div id="login">
                        <h1>Welcome Back!</h1>
                        <form action="{{ url('/authLogin') }}" method="post">
                            {{ csrf_field() }}
                            <div class="field-wrap">
                                <label> Email Address<span class="req">*</span> </label>
                                <input type="email" name="email" required autocomplete="off"/>
                            </div>

                            <div class="field-wrap">
                                <label> Password<span class="req">*</span> </label>
                                <input type="password" name="password" required autocomplete="off"/>
                            </div>

                            <button class="button button-block hvr-bounce-to-bottom"> Log In </button>
                        </form><!-- form -->
                    </div>
                </div>
            </div><!-- modal-body -->
            
        </div>
    </div>
</div>
<!-- Header Ends --> 

<!-- yield content -->
@yield('content')

<!-- Feature Start -->
<footer id="footer"><!--Footer-->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Our Properties</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Single Story</a></li>
                            <li><a href="#">Dubble Story</a></li>
                            <li><a href="#">Tripple Story</a></li>
                            <li><a href="#">Home in Merrick Way</a></li>
                            <li><a href="#">Resort</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quick Links</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Home in Coral Gables</a></li>
                            <li><a href="#">Villa on Grand Avenue</a></li>
                            <li><a href="#">Home in Merrick Way</a></li>
                            <li><a href="#">Land / Plots</a></li>
                            <li><a href="#">Restaurent</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>About Real Estate</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Real Estate News Letter</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />
                                our site and be updated your self...</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2016 Build Dreams Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="#">Logicsforest</a></span></p>
            </div>
        </div>
    </div>
</footer>
<!-- Feature End --> 

<script src="{{ asset('assets/js/jquery-2.2.3.min.js') }}"></script> 
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>  
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('assets/js/mmenu.min.all.js') }}"></script> 
<script src="{{ asset('assets/js/custom-js.js') }}"></script>
<script src="{{ asset('assets/js/choices.js') }}"></script>
<script src="{{ asset('assets/js/flatpickr.js') }}"></script>
<script src="{{ asset('assets/sale/js/jquery.bootstrap.wizard.js') }}"></script>
<script src="{{ asset('assets/sale/js/paper-bootstrap-wizard.js') }}"></script>
<script src="{{ asset('assets/sale/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/sale/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('assets/sale/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/formatRupiah.js') }}"></script>
<script src="{{ asset('assets/js/kprBank.js') }}"></script>
<script src="{{ asset('assets/js/comment.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


@include('sweet::alert')

@if(Session('login'))
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
@endif

</body>
</html>
