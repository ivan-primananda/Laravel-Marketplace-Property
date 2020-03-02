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
                        <li><a class="hvr-overline-from-center" href="{{ url('/') }}">Home</a></li>
                        <li><a class="hvr-overline-from-center" href="{{ url('sale') }}">Jual Property</a></li>
                        <li><a class="hvr-overline-from-center" href="{{ url('properties') }}">Properties</a></li>
                        <li><a class="hvr-overline-from-center" href="{{ url('listAgent') }}">List Agent</a></li>
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
                                        <a class="dropdown-item" href="{{ url('akun/' .Session::get('id')) }}">Akun</a>
                                        @if($jumlah != 0)
                                            <a class="dropdown-item" href="{{ url('pesan') }}">
                                                Pesan
                                                <span class="new" style="background: red; border-radius: 50%; height: 10px; width: 10px; position: absolute;"></span>
                                            </a>
                                        @else
                                            <a class="dropdown-item" href="{{ url('pesan') }}">
                                                Pesan
                                            </a>
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