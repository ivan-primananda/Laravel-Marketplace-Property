@extends('layouts.agent')

@section('content')

<!-- Jumbotron -->
<div class="jumbotron" style="background-image: url({!! asset('assets/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg') !!}); background-size: 100% 160%; height: 300px;">
    <div class="container">
        <h1 class="display-4" style="text-align: center;">Edit Informasi Akun</h1>
        <hr>
    </div>
</div>
<!-- Jumbotron End -->

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			@foreach($editakun as $akun)
			<form action="/updateAkun/{{ Session::get('id') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
			
				<div class="card">
					<div class="card-header">
						<div align="center">
							Edit Akun
						</div>
					</div>
					<div class="card-body">
						<div>
							<div class="hidden">
			                    <input type="hidden" class="form-control" name="id" value="{{ $akun->id }}">
		                	</div>
		                	<div class="input-group mb-2">
						        <div class="input-group-prepend">
						          	<div class="input-group-text" style="height: 39px; width: 88px;"><strong>Foto Profil</strong></div>
						          	<input style="border: 1px solid grey; border-radius: 0 50px 50px 0; width: 400px; padding-top: 8px; padding-bottom: 8px; padding-left: 7px;" type="file" name="picture">
						        </div>
						    </div>
							<div class="input-group mb-2">
						        <div class="input-group-prepend">
						          	<div class="input-group-text" style="height: 39px;"><strong>Nama Lengkap</strong></div>
						          	<input style="border: 1px solid grey; border-radius: 0 50px 50px 0; width: 400px; padding-top: 8px; padding-bottom: 8px; padding-left: 7px;" type="text" name="full_name" value="{{ $akun->full_name }}">
						        </div>
						    </div>
							<div class="input-group mb-2">
						        <div class="input-group-prepend">
						          	<div class="input-group-text" style="height: 39px; width: 88px;"><strong>Email</strong></div>
						          	<input style="border: 1px solid grey; border-radius: 0 50px 50px 0; width: 400px; padding-top: 8px; padding-bottom: 8px; padding-left: 7px;" type="email" name="email" value="{{ $akun->email }}">
						        </div>
						    </div>
						    <div class="input-group mb-2">
						        <div class="input-group-prepend">
						          	<div class="input-group-text" style="height: 39px;"><strong>Nomor Telepon</strong></div>
						          	<input style="border: 1px solid grey; border-radius: 0 50px 50px 0; width: 400px; padding-top: 8px; padding-bottom: 8px; padding-left: 7px;" type="text" name="phone" value="{{ $akun->phone }}">
						        </div>
						    </div>
							<div class="input-group mb-2">
						        <div class="input-group-prepend">
						          	<div class="input-group-text" style="height: 39px; width: 89px;"><strong>Domisili</strong></div>
						          	<input style="border: 1px solid grey; border-radius: 0 50px 50px 0; width: 400px; padding-top: 8px; padding-bottom: 8px; padding-left: 7px;" type="text" name="domisili" value="{{ $akun->domisili }}">
						        </div>
						    </div>
						    <div class="input-group mb-2">
						        <div class="input-group-prepend">
						          	<div class="input-group-text" style="height: 39px; width: 89px;">
						          		<strong>
						          			File CV
						          		</strong>
										<i class="fa fa-file-pdf-o" aria-hidden="true" style="margin-left: 10px;"></i>
						          	</div>
						          	<input style="border: 1px solid grey; border-radius: 0 50px 50px 0; width: 400px; padding-top: 8px; padding-bottom: 8px; padding-left: 7px;" type="file" name="file_cv" value="{{ $akun->file_cv }}">
						        </div>
						    </div>
						</div>
					</div>
					<div class="card-footer text-muted">
	                	<input type="submit" class="btn btn-primary" value="Update Akun" style="float: right;">
	            	</div>
				</div>
			</form>
			@endforeach

		</div>
	</div>
</div>

@stop