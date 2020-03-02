@extends('layouts.master')

@section('content')

<!-- Jumbotron -->
<section id="main-slider">
    <div class="jumbotron-properties" style="background-image: url({!! asset('assets/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg') !!}); background-size: 100% 200%;">
        <h1 class="judul-properties"><hr> Informasi Agent <hr></h1>
    </div>
</section>
<!-- Jumbotron End -->

<section>
    <div class="container">
        <div class="inner-contact-agent-area">
            <div id="inner-contact-agent-intro" class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <img src="{!! asset('UserPicture/'. $agent->picture) !!}" class="inner-contact-agnet-image" alt="agent_photo"/> 
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h2 style="margin-bottom: 20px;">{{ $agent->full_name }}</h2>
                            <hr>
                            <div class="col-md-12 col-sm-12 col-xs-12 contactstyle">
                                <i class="fa fa-envelope" aria-hidden="true">
                                    {{ $agent->email }}
                                </i>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 contactstyle">
                                <i class="fa fa-phone" aria-hidden="true">
                                    {{ $agent->phone }}
                                </i>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 contactstyle">
                                <i class="fa fa-map-marker" aria-hidden="true">
                                    {{ $agent->domisili }}
                                </i>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 contactstyle">
                                <i class="fa fa-file-pdf-o" aria-hidden="true">
                                    <a href="/listAgent/download/{{ $agent->id }}">
                                        Lihat File CV Agent
                                    </a>
                                </i>
                            </div>
                        </div>
                        <div class="btnBack">
                            <a class="btn btn-success btn-lg" href="{{ url('listAgent') }}">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop