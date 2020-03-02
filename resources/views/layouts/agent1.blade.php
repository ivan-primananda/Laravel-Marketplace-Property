<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Bajuale - Agent</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets/agent/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/agent/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/agent/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/agent/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets/agent/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('assets/agent/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/agent/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/agent/vendor/wow/animate.css" rel="stylesheet') }}" media="all">
    <link href="{{ asset('assets/agent/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/agent/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/agent/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/agent/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('assets/agent/css/theme.css') }}" rel="stylesheet" media="all">

    <!-- Pusher -->
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>

    
    @yield('style')

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- Header -->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="{{ asset('assets/agent/images/icon/logo-white.png') }}" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{ url('agent') }}">
                                    <i class="fas fa-tachometer-alt"></i>
                                    Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('seller') }}">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>
                                    Jual Properti
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('chat') }}">
                                    <i class="fas fa fa-comments"></i>
                                    <span class="bot-line"></span>
                                    Pesan
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        @if($jumlah == 0)
                        <div class="header-button-item js-item-menu">
                        @else
                        <div class="header-button-item has-noti js-item-menu">
                        @endif
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                @if($jumlah == 0)
                                <div class="notifi__title">
                                    <p>Kamu Telah Membaca Semua Pesan Masuk</p>
                                </div>
                                @else
                                <div class="notifi__title">
                                    <p>Anda Belum Membaca {{ $jumlah }} Pesan Masuk</p>
                                </div>
                                @endif
                                @foreach($users as $user)
                                {{-- @if($user->is_read == 0)
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>{{ $user->full_name }}</p>
                                        <p>{{ $user->email }}</p>
                                        <span class="date">{{ date('d M y, h:i a', strtotime($user->created_at)) }}</span>
                                    </div>
                                </div>
                                @else
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>{{ $user->full_name }}</p>
                                        <p>{{ $user->email }}</p>
                                        <span class="date">{{ date('d M y, h:i a', strtotime($user->created_at)) }}</span>
                                    </div>
                                </div>
                                @endif --}}
                                @endforeach
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{ url('akun') }}">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-globe"></i>Language</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-pin"></i>Location</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>Email</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="UserPicture/{!! Session::get('picture') !!}" alt="picture" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{ Session::get('full_name') }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="UserPicture/{!! Session::get('picture') !!}" alt="picture" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{ Session::get('full_name') }}</a>
                                            </h5>
                                            <span class="email">{{ Session::get('email') }}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="{{ url('user/detail/$user->id_agent') }}">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{ url('logout') }}">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
        
        @yield('content')
    </div>


    <!-- Jquery JS-->
    <script src="{{ asset('assets/agent/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('assets/agent/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('assets/agent/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('assets/agent/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/agent/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/agent/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/agent/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/agent/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/agent/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/agent/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/agent/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/agent/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/agent/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('assets/agent/js/main.js') }}"></script>

    <!-- sale js -->
    <script src="{{ asset('assets/sale/js/jquery.bootstrap.wizard.js') }}"></script>
    <script src="{{ asset('assets/sale/js/paper-bootstrap-wizard.js') }}"></script>
    <script src="{{ asset('assets/sale/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/sale/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/sale/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- JS Add Images -->
    <script type="text/javascript">
        $(document).ready(function() {

            $(".btn-success").click(function(){ 
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            $("body").on("click",".btn-danger",function(){ 
                $(this).parents(".control-group").remove();
            });

        });
    </script>


    <!-- JS Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="{{ asset('assets/js/mapInput.js') }}"></script> -->

    @include('sweet::alert')

</body>

</html>