@extends('layouts.master')

@section('content')

<!-- Jumbotron -->
<section id="main-slider">
    <div class="jumbotron" style="background-image: url('assets/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg'); background-size: 100% 150%;">
        <h1 class="display-4">Selamat Datang!</h1><br>
        <p class="lead">Bergabunglah bersama kami dalam penjualan tanah dan property anda.</p>
        <hr class="my-4">
        <div class="col-md-6 col-md-offset-6">
            <p>Dapatkan pengalaman yang lebih mudah untuk berkomunikasi dengan agent penjualan rumah dan tanah.</p>
            <a class="btn btn-success btn-lg" href="#formRegister" role="button" style="float: right">Daftar Sekarang!</a>
        </div>
    </div>
</section>
<!-- Jumbotron End -->

<!-- Form Register -->
<section id="form-register">
    <div class="container" id="formRegister">
        <div class="col-md-6 col-md-offset-3">
            <div class="card text-center">
                
                <div class="card-header justify-content-center">
                    <h4 style="font-weight: bold">Register Here</h4>
                </div>
                <div class="inner-contact-agent-area">
                    
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif

                    <form action="/register/proses" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="picture-container">
                                    <div class="picture">
                                        <img src="{{ asset('assets/icon/icons8-iron-man.svg') }}" class="picture-src" id="showgambar" title="" />
                                        <input type="file" name="picture" id="inputgambar">
                                    </div>
                                    <h6>Pilih Foto</h6>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="full_name" placeholder="Full Name">
                                <input type="text" name="email" placeholder="Email Address">
                                <input type="password" name="password" placeholder="Password">
                                <input type="text" name="phone" placeholder="Phone Number">
                                <input type="text" name="domisili" placeholder="Domisili">
                            </div>
                        </div>

                        <div class="card-footer text-muted inner-contact-agent-area">
                            <input type="submit" name="sendmessage" class="send-message" value="Daftar" />
                        </div>
                    </form>
                </div>
                
        
            </div>
        </div>
    </div>

</section>

@stop