@extends('layouts.agent')

@section('content')

<!-- Jumbotron -->
@php
    $data = explode("|", $detail->images);
    // print_r($data);
@endphp
<div class="jumbotron" style="background-image: url({!! asset('PropertyPicture/' .$data[0]) !!}); background-size: 100% 160%;"></div>
<center>
    <div class="btn btn-md btn-success" style="margin-top: -48px;">
        <a href="" data-toggle="modal" data-target="#myModalnih" style="color: black"><i class="fa fa-lock"></i> Lihat Foto Lainnya</a>
    </div>
</center>
<!-- Jumbotron End -->

<!-- Modal -->
<div class="modal fade" id="myModalnih" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle" aria-hidden="true"></i></span></button>
                </div>

            <div class="modal-body">
                <div style="width: 100%">
                    @php
                        $data = explode("|", $detail->images);
                    @endphp

                    @for ( $i = 0; $i < count( $data ); $i++ ) 
                        <img src="{!! URL::asset('PropertyPicture/' .$data[$i] ) !!}" class="d-block w-100" style="height: 300px;margin-top: 15px;">
                    @endfor
                </div>
            </div><!-- modal-body -->
            
        </div>
    </div>
</div>


<!-- Content Start -->
<section class="property-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 agent-contact-sidebar">
                <div>
                    <p style="font-size: 11px">Terakhir Update : {{ $detail->updated_at }}</p>
                    <a href="{{ url('/edit/' .$detail->id) }}">
                        <div class="simulasi-kpr" style="margin-top: -40px;">
                            Edit Property
                        </div>
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center><h4 style="color:black;"><strong> JUDUL PROPERTY : {{ $detail->title }}</strong></h4></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center><h4 style="color:black;"><strong> BIAYA PROPERTY </strong></h4></center>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Harga :</strong>
                                    <br>
                                    {{ "Rp.     " . number_format($detail->harga , 2, ",", "." ) }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Uang Muka :</strong>
                                    <br>
                                    {{ "Rp.     " . number_format($detail->minimal_dp , 2, ",", "." ) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center><h4 style="color:black;"><strong> DESKRIPSI </strong></h4></center>
                        <p>{{ $detail->deskripsi }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center><h4 style="color:black;"><strong> DATA PROPERTY </strong></h4></center>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Nama Property :</strong>
                                    <br>
                                    <small>{{ $detail->title }}</small>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Tipe Property :</strong>
                                    <br>
                                    <small>{{ $detail->tipe_properti }}</small>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Tipe Iklan :</strong>
                                    <br>
                                    <small>{{ $detail->tipe_iklan }}</small>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Sertifikat :</strong>
                                    <br>
                                    <small>{{ $detail->sertifikat }}</small>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Luas Tanah :</strong>
                                    <br>
                                    <small>{{ $detail->luas_tanah }} m<sop>2</sop></small>
                                </p>
                            </div>
                            @if( $detail->tipe_properti == "Rumah")
                                <div class="col-md-6">
                                    <p style="font-size: 16px;">
                                        <strong style="color: black;"> Luas Bangunan :</strong>
                                        <br>
                                        <small>{{ $detail->luas_bangunan }} m<sop>2</sop></small>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p style="font-size: 16px;">
                                        <strong style="color: black;"> Daya Listrik :</strong>
                                        <br>
                                        <small>{{ $detail->daya_listrik }} watt</small>
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @if( $detail->tipe_properti == "Rumah")
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <center><h4 style="color:black;"><strong> PROPERTY's ROOM </strong></h4></center>
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="font-size: 16px;">
                                        <strong style="color: black;"> Jumlah Lantai :</strong>
                                        <br>
                                        <small>{{ $detail->jumlah_lantai }}</small>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p style="font-size: 16px;">
                                        <strong style="color: black;"> Jumlah Kamar Tidur :</strong>
                                        <br>
                                        <small>{{ $detail->kamar_tidur }}</small>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="font-size: 16px;">
                                        <strong style="color: black;"> Jumlah Kamar Mandi :</strong>
                                        <br>
                                        <small>{{ $detail->kamar_mandi }}</small>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p style="font-size: 16px;">
                                        <strong style="color: black;"> Jumlah Garasi :</strong>
                                        <br>
                                        <small>{{ $detail->garasi }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center><h4 style="color:black;"><strong> ALAMAT PROPERTY </strong></h4></center>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Alamat :</strong>
                                    <br>
                                    <small>{{ $detail->alamat }}</small>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Kecamatan :</strong>
                                    <br>
                                    <small>{{ $detail->kecamatan }}</small>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Kelurahan :</strong>
                                    <br>
                                    <small>{{ $detail->kelurahan }}</small>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Kota/Kabupaten :</strong>
                                    <br>
                                    <small>{{ $detail->kota }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="agent-comment">
                    <div class="agent-comment-sidebar"> 
                        <h4><strong style="color: black">Komentar</strong></h4>
                    </div>
                    <div class="agent-contact-form-sidebar">
		                <div class="panel-body comment-container" style="overflow-y: auto; height: 780px; border: 1px solid black;">
		                    
		                    @foreach($comment as $com)
                                @if($com->nama_property == $detail->title)
    		                        <div class="well">
    		                            <i><b> {{ $com->from }} </b></i>&nbsp;&nbsp;
    		                            <br>
    		                            <span> {{ $com->komentar }} </span>
    		                            <div style="margin-left:10px;">
    		                            	<div style="margin-left: 80%; color: blue; margin-bottom: 10px;">
    		                                	<a style="cursor: pointer;" cid="{{ $com->id }}" name_a="{{ Session::get('full_name') }}" token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;
    		                                </div>
    		                                <div class="reply-form">
    		                                    
    		                                    <!-- Dynamic Reply form -->
    		                                    
    		                                </div>
    		                                @foreach($reply as $rep)
    		                                     @if($com->id === $rep->comment_id)
    		                                        <div class="well">
    		                                            <i><b> {{ $rep->from }} </b></i>&nbsp;&nbsp;
    		                                            <br>
    		                                            <span> {{ $rep->replies }} </span>
    		                                            <div style="margin-left: 80%; color: blue; margin-bottom: 10px;">
    		                                            	{{-- <div style="margin-left: 80%; color: blue; margin-bottom: 10px;"> --}}
    		                                                	<a style="cursor: pointer;" rid="{{ $com->id }}" rname="{{ Session::get('full_name') }}" token="{{ csrf_token() }}" class="reply-to-reply">Reply</a>&nbsp;
    		                                                {{-- </div> --}}
    		                                            </div>
    		                                            <div class="reply-to-reply-form">
    		                                    
    		                                                <!-- Dynamic Reply form -->
    		                                                
    		                                            </div>
    		                                            
    		                                        </div>
    		                                    @endif 
    		                                @endforeach
    		                                
    		                            </div>
    		                        </div>
                                @endif
		                    @endforeach

		                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content End -->

@stop
