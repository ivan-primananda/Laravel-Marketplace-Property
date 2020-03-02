@extends('layouts.master')

@section('content')

<!-- Jumbotron -->
<section id="main-slider">
    <div class="jumbotron" style="background-image: url('assets/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg'); background-size: 100% 150%;">
        <h1 class="display-4">Selamat Datang Agen!</h1><br>
        <p class="lead">Bergabunglah bersama kami dalam penjualan tanah dan property anda.</p>
        <hr class="my-4">
        <div class="col-md-6 col-md-offset-6">
            <p>Dapatkan pengalaman yang lebih mudah dalam penjualan tanah dan properti, serta jangkauan pasar yang lebih luas untuk memperbesar peluang terjualnya tanah dan properti anda.</p>
            <a class="btn btn-success btn-lg" href="#formRegister" role="button" style="float: right">Daftar Sekarang!</a>
        </div>
    </div>
</section>
<!-- Jumbotron End -->


<!-- Register's Step -->
<section id="main-slider">
    <div class="container">
        <div class="row padding-top-74  padding-bottom-64">
            <div class="about-services padding-0">
                <div class="col-md-4 col-sm-4 col-xs-12 servicesone padding-left-0"> <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <div class="float-left col-md-9 col-sm-9 col-xs-12 padding-0">
                        <h3 class="blue">Daftar</h3>
                        <p class="white">Daftarkan diri anda sebagain agen penjualan tanah dan properti.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 servicesone padding-left-0"> <i class="fa fa-pencil" aria-hidden="true"></i>
                    <div class="float-left col-md-9 col-sm-9 col-xs-12 padding-0">
                        <h3 class="blue">Jual Property</h3>
                        <p class="white">Jual tanah dan properti disertai informasi terkait penjualan tanah dan properti anda.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 servicesone padding-left-0"> <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    <div class="float-left col-md-9 col-sm-9 col-xs-12 padding-0">
                        <h3 class="blue">Bertemu Calon Pembeli</h3>
                        <p class="white">Bertemu calon pembeli anda untuk melakukan diskusi terkait notaris, pembayaran, dan segala hal yang menyangkut pemindahan hak milik tanah dan properti.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><hr class="my-3">
</section>
<!-- Register's Step End -->


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

                    <form action="/sale/proses" method="POST" enctype="multipart/form-data">
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
                                <label for="cv_agent" style="float: left; margin-top: 20px"> Masukan CV</label>
                                <input type="file" name="file_cv" id="file_cv">
                            </div>
                        </div>

                        <div class="card-footer text-muted inner-contact-agent-area">
                            <input type="submit" name="sendmessage" class="send-message" value="Daftar Menjadi Agen" />
                        </div>
                    </form>
                </div>
                
        
            </div>
        </div>
    </div>

</section>
@stop