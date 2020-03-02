@extends('layouts.master')

@section('content')

<!-- Jumbotron -->
<div class="jumbotron" style="background-image: url({!! asset('assets/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg') !!}); background-size: 100% 160%; height: 300px;">
    <div class="container">
        <h1 class="display-4" style="text-align: center;">Informasi Akun</h1>
        <hr>
    </div>
</div>
<!-- Jumbotron End -->

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="card">
				@foreach($akun as $acc)
					<div class="card-header">
						<div align="center">
							<img src="{{ asset('UserPicture/' .$acc->picture) }}" style="height: 200px; width: 200px; border-radius: 100%; border: 1px solid grey;">
						</div>
					</div>
					<div class="card-body">
						<div>
							<div class="input-group mb-2">
						        <div class="input-group-prepend">
						          	<div class="input-group-text" style="height: 39px;"><strong>Nama Lengkap</strong></div>
						          	<p style="border: 1px solid grey; border-radius: 0 50px 50px 0; width: 400px; padding-top: 8px; padding-bottom: 8px; padding-left: 7px;">{{ $acc->full_name }}</p>
						        </div>
						    </div>
							<div class="input-group mb-2">
						        <div class="input-group-prepend">
						          	<div class="input-group-text" style="height: 39px; width: 88px;"><strong>Email</strong></div>
						          	<p style="border: 1px solid grey; border-radius: 0 50px 50px 0; width: 400px; padding-top: 8px; padding-bottom: 8px; padding-left: 7px;">{{ $acc->email }}</p>
						        </div>
						    </div>
						    <div class="input-group mb-2">
						        <div class="input-group-prepend">
						          	<div class="input-group-text" style="height: 39px;"><strong>Nomor Telepon</strong></div>
						          	<p style="border: 1px solid grey; border-radius: 0 50px 50px 0; width: 400px; padding-top: 8px; padding-bottom: 8px; padding-left: 7px;">{{ $acc->phone }}</p>
						        </div>
						    </div>
							<div class="input-group mb-2">
						        <div class="input-group-prepend">
						          	<div class="input-group-text" style="height: 39px; width: 89px;"><strong>Domisili</strong></div>
						          	<p style="border: 1px solid grey; border-radius: 0 50px 50px 0; width: 400px; padding-top: 8px; padding-bottom: 8px; padding-left: 7px;">{{ $acc->domisili }}</p>
						        </div>
						    </div>
						</div>
					</div>
					<div class="card-footer text-muted">
						<a href="{{ url('/akun/edit/' .Session::get('id')) }}">
		                	<input type="submit" class="btn btn-primary" value="Edit Akun" style="float: right;">
		                </a>
	            	</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@stop