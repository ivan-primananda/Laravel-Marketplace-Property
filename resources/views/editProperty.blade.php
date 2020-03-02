@extends('layouts.agent')

@section('content')

<!-- Jumbotron -->
<div class="jumbotron" style="background-image: url({!! asset('assets/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg') !!}); background-size: 100% 160%; height: 300px;">
    <div class="container">
        <h1 class="display-4" style="text-align: center;">Edit Property </h1>
        <hr>
    </div>
</div>
<!-- Jumbotron End -->


<!-- Content Properti -->
<div class="container card-sale" style="margin-bottom: 50px;">
    <small><p style="font-size: 10px;"><strong>NB :</strong> Untuk penjualan <strong>TANAH KAVLING</strong>, silahkan isi dengan angka <strong>(0)</strong> pada field yang tidak memiliki informasi.</p></small>
    <small><p style="font-size: 10px;">Field<strong> *</strong> Wajib <strong>DIISI</strong> Ulang.</p></small>
    <div class="card text-center">

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br/>
                @endforeach
            </div>
        @endif
        
        @foreach($editproper as $edit)
	        <form action="/update" method="POST" enctype="multipart/form-data">
	            {{ csrf_field() }}
	            
	            <div class="card-header">
	                Edit Properti
	            </div>
	            <div class="card-body">    
	                <h3 class="card-title" style="color: black; font-weight: 700;">Data Properti</h3>
	                <div class="hidden">
	                    <input type="hidden" class="form-control" name="id_agent" value="{{ Session::get('id') }}">
	                    <input type="hidden" class="form-control" name="id" value="{{ $edit->id }}">
	                </div>
	                <div class="form-group">
	                    <label for=""><strong> Judul Properti </strong></label>
	                    <input type="text" class="form-control" style="color: black; font-weight: 500;" name="title" value="{{ $edit->title }}">
	                </div>
	                <div class="row">
	                    <div class="col">
	                        <label for=""><strong> Jumlah Lantai </strong></label>
	                        <input type="text" class="form-control" name="jumlah_lantai" value="{{ $edit->jumlah_lantai }}" style="color: black; font-weight: 500;">
	                    </div>
	                    <div class="col">
	                        <label for=""><strong> Daya Listrik (Watt) </strong></label>
	                        <input type="text" class="form-control" name="daya_listrik" value="{{ $edit->daya_listrik }}" style="color: black; font-weight: 500;">
	                    </div>
	                    <div class="col">
	                        <label for="inputState"><strong> Tipe Properti* </strong></label>
	                        <select id="inputState" name="tipe_properti" class="form-control" style="height: 41px;">
	                            <option value="Rumah">Rumah</option>
	                            <option value="Apartement">Apartement</option>
	                            <option value="Tanah">Tanah Kavling</option>
	                        </select>
	                    </div>
	                    <div class="col">
	                        <label for="inputState"><strong> Tipe Iklan* </strong></label>
	                        <select id="inputState" name="tipe_iklan" class="form-control" style="height: 41px;">
	                            <option selected value="Di Jual">Di Jual</option>
	                            <option value="Di Sewakan">Di Sewakan</option>
	                        </select>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col">
	                        <label for=""><strong> Luas Tanah (m<sup>2</sup>) </strong></label>
	                        <input type="text" class="form-control" name="luas_tanah" value="{{ $edit->luas_tanah }}" style="color: black; font-weight: 500;">
	                    </div>
	                    <div class="col">
	                        <label for=""><strong> Luas Bangunan (m<sup>2</sup>) </strong></label>
	                        <input type="text" class="form-control" name="luas_bangunan" value="{{ $edit->luas_bangunan }}" style="color: black; font-weight: 500;">
	                    </div>
	                    <div class="col">
	                        <label for=""><strong> Sertifikat* </strong></label>
	                        <select id="inputState" name="sertifikat" class="form-control" style="height: 41px;">
	                            <option selected value="Hak Milik (SHM)">Hak Milik (SHM)</option>
	                            <option value="Akta Jual Beli (AJB)">Akta Jual Beli (AJB)</option>
	                            <option value="Hak Guna Bangunan (SHGB)">Hak Guna Bangunan (SHGB)</option>
	                            <option value="Hak Satuan Rumah Susun (SHSRS)">Hak Satuan Rumah Susun (SHSRS)</option>
	                        </select>
	                    </div>
	                </div>
					<hr>
	                <h3 class="second-title" style="color: black; font-weight: 700; margin-bottom: 20px;"> Fasilitas </h3>
	                <div class="row">
	                    <div class="col">
	                        <label for=""><strong> Kamar Tidur </strong></label>
	                        <input type="text" class="form-control" name="kamar_tidur" value="{{ $edit->kamar_tidur }}" style="color: black; font-weight: 500;">
	                    </div>
	                    <div class="col">
	                        <label for=""><strong> Kamar Mandi </strong></label>
	                        <input type="text" class="form-control" name="kamar_mandi" value="{{ $edit->kamar_mandi }}" style="color: black; font-weight: 500;">
	                    </div>
	                    <div class="col">
	                        <label for="inputState"><strong> Garasi </strong></label>
	                        <input type="text" class="form-control" name="garasi" value="{{ $edit->garasi }}" style="color: black; font-weight: 500;">
	                    </div>
	                </div>
					<hr>
	                <h3 class="second-title" style="color: black; font-weight: 700; margin-bottom: 20px;"> Harga & Lokasi</h3>
	                <div class="row">
	                    <div class="col">
	                        <label for=""><strong> Harga (Dalam Rupiah) </strong></label>
	                        <input type="text" class="form-control" name="harga" value="{{ $edit->harga }}" style="color: black; font-weight: 500;">
	                    </div>
	                    <div class="col">
	                        <label for=""><strong> Minimal DP (Dalam Rupiah) </strong></label>
	                        <input type="text" class="form-control" name="minimal_dp" value="{{ $edit->minimal_dp }}" style="color: black; font-weight: 500;">
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-5">
	                        <label for=""><strong> Lokasi Pulau* </strong></label>
	                        <select id="inputState" name="lokasi_pulau" class="form-control" style="height: 41px;">
	                            <option selected value="Pulau Timor">Pulau Timor</option>
	                            <option value="Pulau Flores">Pulau Flores</option>
	                            <option value="Pulau Rote">Pulau Rote</option>
	                            <option value="Pulau Sumba">Pulau Sumba</option>
	                            <option value="Pulau Alor">Pulau Alor</option>
	                            <option value="Pulau Sabu">Pulau Sabu</option>
	                            <option value="Pulau Lembata">Pulau Lembata</option>
	                        </select>
	                    </div>
	                    <div class="col-md-7">
	                        <label for=""><strong> Alamat Properti </strong></label>
	                        <input type="text" class="form-control" name="alamat" value="{{ $edit->alamat }}" style="color: black; font-weight: 500;">
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col">
	                        <label for=""><strong> Kecamatan </strong></label>
	                        <input type="text" class="form-control" name="kecamatan" value="{{ $edit->kecamatan }}" style="color: black; font-weight: 500;">
	                    </div>
	                    <div class="col">
	                        <label for=""><strong> Kelurahan </strong></label>
	                        <input type="text" class="form-control" name="kelurahan" value="{{ $edit->kelurahan }}" style="color: black; font-weight: 500;">
	                    </div>
	                    <div class="col">
	                        <label for=""><strong> Kota/Kabupaten </strong></label>
	                        <input type="text" class="form-control" name="kota" value="{{ $edit->kota }}" style="color: black; font-weight: 500;">
	                    </div>
	                    <!-- <div class="col">
	                        <div class="form-group">
	                            <label for="address_address">Address</label>
	                            <input type="text" id="address-input" name="address_address" class="form-control map-input">
	                            <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
	                            <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
	                        </div>
	                        <div id="address-map-container" style="width:100%;height:400px; ">
	                            <div style="width: 100%; height: 100%" id="address-map"></div>
	                        </div>
	                    </div> -->
	                </div>
					<hr>
	                <h3 class="second-title" style="color: black; font-weight: 700; margin-bottom: 20px;"> Deskripsi Properti </h3><br>
	                <textarea style="border-radius: 10px; color: black;" rows="7" name="deskripsi" style="color: black; font-weight: 500;">{{ $edit->deskripsi }}</textarea>
	            </div>
	            <div class="card-footer text-muted">
	                <input type="submit" class="btn btn-primary" value="Update Property">
	            </div>
	        </form>
        @endforeach
    </div>
</div>
<!-- Content Properti End -->


@stop