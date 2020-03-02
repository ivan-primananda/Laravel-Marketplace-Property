@extends('layouts.agent1')

@section('content')

<!-- Jumbotron -->
<div class="jumbotron" style="background-image: url({!! asset('assets/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg') !!}); background-size: 100% 160%;">
    <div class="container">
        <h1 class="display-4">Selamat Datang Agent</h1><br>
        <h2 class="display-5">{{ Session::get('full_name') }}</h2>
        <hr>
        <div class="col-md-5 display-6">
            <p>Daftarkan properti anda sekarang untuk jangkauan pasar yang lebih luas dan rasakan kemudahannya! </p>
            <a class="btn btn-success btn-lg" href="{{ url('/seller') }}" role="button" style="float: right">Daftar Properti!</a>
        </div>
    </div>
</div>
<!-- Jumbotron End -->


<!-- Content Properti -->
<div class="container">
    <!-- <div class="properti-seller"> -->
    @foreach($proper as $p)
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="row no-gutters seller-properties">
                        <div class="col-md-4">
                            <img src="PropertyPicture/{!! $p->images !!}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h3 class="card-title" style="color: white;">{{ $p->title }}</h3>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="/edit/{{ $p->id }}">
                                            <button class="btnEdit">Edit</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 seller-information">
                                        <p>{{ $p->kota }}</p>
                                        <br>
                                        <p class="card-text">{{ "Rp.     " . number_format($p->harga , 2, ",", "." ) }}</p>
                                        <p class="card-text" style="color: white;"><small>{{ $p->deskripsi }}</small></p>
                                    </div>
                                    <div class="col-md-5 seller-facility">
                                        <ul>
                                            <li class="left" style="color: white;"><i class="fa fa-home" aria-hidden="true"></i> Bathrooms</li>
                                            <li class="right"><span>{{ $p->kamar_mandi }}</span> </li>
                                        </ul>
                                        <ul>
                                            <li class="left" style="color: white;"><i class="fa fa-bed" aria-hidden="true"></i> Beds</li>
                                            <li class="right"><span>{{ $p->kamar_tidur }}</span> </li>
                                        </ul>
                                        <ul>
                                            <li class="left" style="color: white;"><i class="fa fa-car" aria-hidden="true"></i> Garages</li>
                                            <li class="right"><span>{{ $p->garasi }}</span> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- </div> -->
</div>
<!-- Content Properti End -->

@stop