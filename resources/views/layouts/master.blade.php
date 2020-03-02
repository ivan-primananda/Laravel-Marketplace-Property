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

    @yield('style')
</head>


<body>

<!-- include header -->
@include('layouts.header')

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

@yield('script')

@if(Session('login'))
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
@endif


@include('sweet::alert')
</body>
</html>
