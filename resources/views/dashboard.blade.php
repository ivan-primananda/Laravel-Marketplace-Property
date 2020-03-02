@extends('layouts.agent')

@section('content')

<!-- Jumbotron -->
<div class="jumbotron" style="background-image: url({!! asset('assets/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg') !!}); background-size: 100% 160%;">
    <div class="container">
        <h1 class="display-4">Selamat Datang Agent </h1><br>
        <h2 class="display-5" style="margin-top: -40px; color: white;">{{ Session::get('full_name') }}</h2>
        <hr>
        <div class="col-md-5 display-6" style="float: right;">
            <p>Daftarkan properti anda sekarang untuk jangkauan pasar yang lebih luas dan rasakan kemudahannya! </p>
            <a class="btn btn-success btn-lg" href="{{ url('/seller') }}" role="button" style="float: right">Daftar Properti!</a>
        </div>
    </div>
</div>
<!-- Jumbotron End -->


<!-- Property Start -->
<section id="property" class="paddin-2" style="margin-top: 20px;">
    <div class="container">
        <header class="section-title">
            <h2>Your Property</h2>
        </header>

        <div class="row">
        @foreach ($proper as $p)
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="single-effect">
                    <div class="wpf-property"> 
                        <a href="{{ url('/properties/agent/detail/'.$p->id) }}">
                            @php
                                $data = explode("|", $p->images);
                                // print_r($data);
                            @endphp
                            <img src="PropertyPicture/{!! $data[0] !!}" alt="image" class="img-responsive" style="height: 350px">
                        </a>
                        <div class="view-caption">
                            <div class="property-box">
                                <div class="box-heading">
                                    <h3>{{ $p->title }}</h3>
                                    <p style="font-size: 8px; color: white;">{{ $p->alamat }}, {{ $p->kota }}</p>
                                    <span>{{ "Rp.     " . number_format($p->harga , 2, ",", "." ) }}</span>
                                    <a href="#">{{ $p->tipe_iklan }}</a> 
                                </div>
                                <div class="area-box text-left">
                                    <ul>
                                        <li><i class="fa fa-columns" aria-hidden="true"></i></li>
                                        <li>
                                            <p>Luas Tanah </p>
                                            <strong>{{ $p->luas_tanah }}</strong><small>m<sup>2</sup></small> 
                                        </li>
                                    </ul>
                                </div>
                                @if( $p->tipe_properti == "Rumah" )
                                    <div class="area-box text-left animation animated-item-1">
                                        <ul>
                                            <li><i class="fa fa-th-large" aria-hidden="true"></i></li>
                                            <li>
                                                <p>Kamar Tidur</p>
                                                <strong>{{ $p->kamar_tidur }}</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="area-box text-left animation animated-item-1">
                                        <ul>
                                            <li><i class="fa fa-trello" aria-hidden="true"></i></li>
                                            <li>
                                                <p>Kamar Mandi</p>
                                                <strong>{{ $p->kamar_mandi }}</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="area-box text-left animation animated-item-1">
                                        <ul>
                                            <li><i class="fa fa-home" aria-hidden="true"></i></li>
                                            <li>
                                                <p>Sertifikat</p>
                                                <strong>{{ $p->sertifikat }}</strong>
                                            </li>
                                        </ul>
                                    </div>
                                @elseif( $p->tipe_properti == "Tanah" )
                                    <div class="area-box text-left animation animated-item-1">
                                        <ul>
                                            <li><i class="fa fa-home" aria-hidden="true"></i></li>
                                            <li>
                                                <p>Sertifikat</p>
                                                <strong>{{ $p->sertifikat }}</strong>
                                            </li>
                                        </ul>
                                    </div>
                                @endif
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md">
                                            <a href="{{ url('/edit/' .$p->id) }}">
                                                <input class="btn btn-info" type="submit" value="Edit Property">
                                            </a>
                                        </div>
                                        <div class="col-md">
                                            <a href="{{ url('/delete/' .$p->id) }}">
                                                <input class="btn btn-danger" type="submit" value="Delete Property">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="image-heading">
                            <h3>{{ $p->title }}</h3>
                            <a href="{{ url('/properties/agent/detail/'.$p->id) }}">Lihat Detail</a>
                            <span class="pull-right">{{ "Rp.     " . number_format($p->harga , 2, ",", "." ) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="col-md-12">
            <center>{{ $proper->links()}}</center>    
        </div>
    </div>
</section>
<!-- Property End --> 

@stop