@extends('layouts.master')

@section('content')


<!-- Jumbotron -->
<section id="main-slider">
    <div class="jumbotron-properties" style="background-image: url({!! asset('assets/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg') !!}); background-size: 100% 200%;">
        <h1 class="judul-properties"><hr> Simulasi KPR <hr></h1>
    </div>
</section>
<!-- Jumbotron End -->

{{-- Simulasi KPR start --}}	
<section>
	<div class="container card-sale">
		<h2 style="color: black">{{ $sim->title }}</h2>
		<h3 style="color: black;">{{ "Rp.     " . number_format($sim->harga , 2, ",", "." ) }}</h3> <br>
		<h4>{{ $sim->alamat }}, {{ $sim->kota }}</h4>
		<br>
    	<div class="card text-center">            
            
            <div class="card-header">
                <h3 style="color: black;">Simulasi KPR</h3>
            </div>
			<form name="autoSumForm">
	            <div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="row" style="margin-top: 30px">
							<div class="col-md-6">
								<h5 style="color: black;">Harga Property</h5>
								<h3 style="color: black; margin-top: 15px; text-align: center;">{{ "Rp.     " . number_format($sim->harga , 2, ",", "." ) }}</h3>
							</div>
							<div class="col-md-6">
								<h5 style="color: black;">Minimal DP</h5>
								<h3 style="color: black; margin-top: 15px; text-align: center;">{{ "Rp.     " . number_format($sim->minimal_dp , 2, ",", "." ) }}</h3>
							</div>
						</div>
						<hr>
						<div class="row" style="margin-top: 20px">
							<div class="col-md-6">
								<h5 style="color: black;">Pinjaman Kredit</h5>
								<input type="text" name="kredit" id="kredit" value="{{ $sim->harga - $sim->minimal_dp  }}" hidden>
								<h3 style="color: black; margin-top: 15px; text-align: center;">{{ "Rp.     " . number_format($sim->harga - $sim->minimal_dp , 2, ",", "." ) }}</h3>
							</div>
							<div class="col-md-2">
								<h5 style="color: black;"><strong>Bunga</strong>/<small>Tahun</small></h5>
								<div>
	                                <select name="bunga" id="bunga"  onchange="hitung()" style="border: 1px solid black; color: black; border-radius: 10px 0 10px 0; padding: 5px">
			                            <option selected value="0.5">0,5%</option>
			                            <option value="1">1%</option>
			                            <option value="1.5">1,5%</option>
			                            <option value="2">2%</option>
			                            <option value="2.5">2,5%</option>
			                            <option value="3">3%</option>
			                            <option value="3.5">3,5%</option>
			                            <option value="4">4%</option>
			                            <option value="4.5">4,5%</option>
			                            <option value="5">5%</option>
			                            <option value="5.37">5,37%</option>
			                            <option value="5.5">5,5%</option>
			                            <option value="6">6%</option>
			                            <option value="6.5">6,5%</option>
			                            <option value="7">7%</option>
			                            <option value="7.5">7,5%</option>
			                            <option value="7.58">7,58%</option>
			                            <option value="8">8%</option>
			                            <option value="8.5">8,5%</option>
			                            <option value="9">9%</option>
			                            <option value="9.5">9,5%</option>
			                            <option value="10">10%</option>
			                            <option value="10.5">10,5%</option>
			                            <option value="11">11%</option>
			                            <option value="11.5">11,5%</option>
			                            <option value="12">12%</option>
			                            <option value="12.5">12,5%</option>
			                            <option value="13">13%</option>
			                            <option value="13.5">13,5%</option>
			                        </select>
	                            </div> 
							</div>
							<div class="col-md-2">
								<h5 style="color: black;"><strong>Jangka Waktu</strong></h5>
								<div>
	                                <select name="tenor" id="tenor" onchange="hitung()" style="border: 1px solid black; color: black; border-radius: 10px 0 10px 0; padding: 5px">
			                            <option selected value="1">1 Tahun</option>
			                            <option value="2">2 Tahun</option>
			                            <option value="3">3 Tahun</option>
			                            <option value="4">4 Tahun</option>
			                            <option value="5">5 Tahun</option>
			                            <option value="6">6 Tahun</option>
			                            <option value="7">7 Tahun</option>
			                            <option value="8">8 Tahun</option>
			                            <option value="9">9 Tahun</option>
			                            <option value="10">10 Tahun</option>
			                            <option value="11">11 Tahun</option>
			                            <option value="12">12 Tahun</option>
			                            <option value="13">13 Tahun</option>
			                            <option value="14">14 Tahun</option>
			                            <option value="15">15 Tahun</option>
			                            <option value="16">16 Tahun</option>
			                            <option value="17">17 Tahun</option>
			                            <option value="18">18 Tahun</option>
			                            <option value="19">19 Tahun</option>
			                            <option value="20">20 Tahun</option>
			                            <option value="21">21 Tahun</option>
			                            <option value="22">22 Tahun</option>
			                            <option value="23">23 Tahun</option>
			                            <option value="24">24 Tahun</option>
			                            <option value="25">25 Tahun</option>
			                            <option value="26">26 Tahun</option>
			                            <option value="27">27 Tahun</option>
			                            <option value="28">28 Tahun</option>
			                            <option value="29">29 Tahun</option>
			                            <option value="30">30 Tahun</option>
			                            <option value="31">31 Tahun</option>
			                            <option value="32">32 Tahun</option>
			                            <option value="33">33 Tahun</option>
			                            <option value="34">34 Tahun</option>
			                            <option value="35">35 Tahun</option>
			                        </select>
	                            </div> 
							</div>
						</div>
						<hr>
						<div class="row" style="margin-top: 20px">
							<div class="col-md-4">
								<h5 style="color: black;"><strong>Cicilan Pokok</strong><small>/Bulan</small></h5>
								<h3 style="color: black; margin-top: 15px; text-align: center;">
									Rp. <span id="totalcicilan">0</span>
								</h3>
							</div>
							<div class="col-md-4">
								<h5 style="color: black;"><strong>Cicilan Bunga</strong><small>/Bulan</small></h5>
								<h3 style="color: black; margin-top: 15px; text-align: center;">
									Rp. <span id="totalbunga">0</span>
								</h3>
							</div>
							<div class="col-md-4">
								<h5 style="color: black;"><strong>Total Pembayaran Angsuran</strong><small>/Bulan</small></h5>
								<h3 style="color: black; margin-top: 15px; text-align: center;">
									Rp. <span id="totalangsuran">0</span>
								</h3>
								<hr style="margin-bottom: -3px;">
								<small><strong>NB : </strong> Simulasi dilakukan hanya dengan suku bunga fixed.</small>
								<hr style="margin-top: -3px;">
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
	</div>
	{{-- Simulasi KPR End --}}
	
	<div style="margin-top: 50px;">
		<hr>
	</div>
	
	{{-- KPR Bank start --}}	
	<div class="container card-sale" style="margin-top: 50px">
    	<div class="card text-center">            
            
            <div class="card-header">
                <h3 style="color: black;">KPR Bank</h3>
            </div>
            <div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="row" style="margin-top: 30px">
						<div class="col-md-4">
							<h5 style="color: black;">Harga Property</h5>
							<h3 style="color: black; margin-top: 15px; text-align: center;">{{ "Rp.     " . number_format($sim->harga , 2, ",", "." ) }}</h3>
						</div>
						<div class="col-md-4">
							<h5 style="color: black;">Minimal DP</h5>
							<h3 style="color: black; margin-top: 15px; text-align: center;">{{ "Rp.     " . number_format($sim->minimal_dp , 2, ",", "." ) }}</h3>
						</div>
						<div class="col-md-4">
							<h5 style="color: black;">Pinjaman Kredit</h5>
							<input type="text" name="kredit" id="kredit" value="{{ $sim->harga - $sim->minimal_dp  }}" hidden>
							<h3 style="color: black; margin-top: 15px; text-align: center;">{{ "Rp.     " . number_format($sim->harga - $sim->minimal_dp , 2, ",", "." ) }}</h3>
						</div>
					</div>
					<hr>
					<div class="row" style="margin-top: 20px; margin-bottom: 20px;">

						<div class="col-md lihat-info-kpr">
							<center><img src="{{ asset('BankIcon/mandiri.png') }}" style="height: 40px; width: 80px;"></center>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bankMandiri">
							  Info KPR Bank Mandiri
							</button>
						</div>

						<div class="col-md lihat-info-kpr">
							<center><img src="{{ asset('BankIcon/bni.png') }}" style="height: 30px; width: 80px; margin-top: 6px; margin-bottom: 4px;"></center>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bankBNI">
							  Info KPR Bank BNI
							</button>
						</div>

						<div class="col-md lihat-info-kpr">
							<center><img src="{{ asset('BankIcon/bri.png') }}" style="height: 30px; width: 80px; margin-top: 6px; margin-bottom: 4px;"></center>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bankBRI">
							  Info KPR Bank BRI
							</button>
						</div>

						<div class="col-md lihat-info-kpr">
							<center><img src="{{ asset('BankIcon/bca.png') }}" style="height: 30px; width: 80px; margin-top: 6px; margin-bottom: 4px;"></center>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bankBCA">
							  Info KPR Bank BCA
							</button>
						</div>

						<div class="col-md lihat-info-kpr">
							<center><img src="{{ asset('BankIcon/btn.png') }}" style="height: 30px; width: 80px; margin-top: 6px; margin-bottom: 4px;"></center>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bankBTN">
							  Info KPR Bank BTN
							</button>
						</div>
					</div>

					

				</div>
			</div>
		</div>
	</div>
	{{-- KPR Bank End --}}

	<div style="margin-top: 50px;">
		<hr>
	</div>
	
	{{-- Compare KPR start --}}	
	{{-- <div class="container card-sale" style="margin-top: 50px">
    	<div class="card text-center">            
            
            <div class="card-header">
                <h3 style="color: black;">Compare KPR Bank</h3>
            </div>
            <div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="row" style="margin-top: 30px">
						<div class="col-md-4">
							<h5 style="color: black;">Harga Property</h5>
							<h3 style="color: black; margin-top: 15px; text-align: center;">{{ "Rp.     " . number_format($sim->harga , 2, ",", "." ) }}</h3>
						</div>
						<div class="col-md-4">
							<h5 style="color: black;">Minimal DP</h5>
							<h3 style="color: black; margin-top: 15px; text-align: center;">{{ "Rp.     " . number_format($sim->minimal_dp , 2, ",", "." ) }}</h3>
						</div>
						<div class="col-md-4">
							<h5 style="color: black;">Pinjaman Kredit</h5>
							<input type="text" name="kredit" id="kredit" value="{{ $sim->harga - $sim->minimal_dp  }}" hidden>
							<h3 style="color: black; margin-top: 15px; text-align: center;">{{ "Rp.     " . number_format($sim->harga - $sim->minimal_dp , 2, ",", "." ) }}</h3>
						</div>
					</div>
					<hr>
					<div class="row" style="margin-top: 20px; margin-bottom: 10px;"> --}}

						{{-- sisi kiri start --}}
						{{-- <div class="col-md-6">
							<div class="card" style="margin-left: 10px;">
								<div class="card-body">
									<div class="row d-flex justify-content-center" style="margin-top: 20px">
										<div class="col-md">
											<h5 style="color: black;">Pilihan Bank</h5>
											<div>
				                                <select name="bankA" id="bankA" onfocus="startCompA()" onblur="stopCompA()" style="border: 1px solid black; color: black; border-radius: 10px 0 10px 0; padding: 5px">
						                            <option selected value="mandiri">Bank Mandiri</option>
						                            <option value="bni">Bank BNI</option>
						                            <option value="bri">Bank BRI</option>
						                            <option value="bca">Bank BCA</option>
						                            <option value="btn">Bank BTN</option>
						                        </select>
				                            </div> 
										</div>
									</div>
									<hr>
									<div class="row" style="margin-top: 20px">
										<div class="col-md">
											<h5 style="color: black;"><strong>Bunga Minimal</strong><small>/Tahun</small></h5>
											<h3 style="color: black; margin-top: 15px; text-align: center;">
												<span id="comparebunga-minimala">0</span> %
											</h3>
										</div>
										<div class="col-md">
											<h5 style="color: black;"><strong>Maksimal Tenor</strong></h5>
											<h3 style="color: black; margin-top: 15px; text-align: center;">
												<span id="comparemax-tenora">0</span> Tahun
											</h3>
										</div>
									</div>
									<hr>
									<div class="row" style="margin-top: 20px">
										<div class="col-md">
											<h5 style="color: black;"><strong>Cicilan Pokok</strong><small>/Bulan</small></h5>
											<h3 style="color: black; margin-top: 15px; text-align: center;">
												Rp. <span id="comparetotalcicilanbanka">0</span>
											</h3>
										</div>
										<div class="col-md">
											<h5 style="color: black;"><strong>Cicilan Bunga</strong><small>/Bulan</small></h5>
											<h3 style="color: black; margin-top: 15px; text-align: center;">
												Rp. <span id="comparetotalbungabanka">0</span>
											</h3>
										</div>
									</div>
									<hr>
									<div class="row" style="margin-top: 20px">
										<div class="col-md">
											<h5 style="color: black;"><strong>Total Pembayaran Angsuran</strong><small>/Bulan</small></h5>
											<h3 style="color: black; margin-top: 15px; text-align: center;">
												Rp. <span id="comparetotalangsuranbanka">0</span>
											</h3>
											<hr style="margin-bottom: -3px;">
												<small><strong>NB : </strong> Perhitungan dilakukan hanya dengan suku bunga fixed.</small>
											<hr style="margin-top: -3px;">
										</div>
									</div>
								</div>
							</div>
						</div> --}}
						{{-- sisi kiri end --}}

						{{-- sisi kanan start --}}
						{{-- <div class="col-md-6">
							<div class="card" style="margin-right: 10px;">
								<div class="card-body">
									<div class="row d-flex justify-content-center" style="margin-top: 20px">
										<div class="col-md">
											<h5 style="color: black;">Pilihan Bank</h5>
											<div>
				                                <select name="bankB" id="bankB" onfocus="startCompB()" onblur="stopCompB()" style="border: 1px solid black; color: black; border-radius: 10px 0 10px 0; padding: 5px">
						                            <option selected value="mandiri">Bank Mandiri</option>
						                            <option value="bni">Bank BNI</option>
						                            <option value="bri">Bank BRI</option>
						                            <option value="bca">Bank BCA</option>
						                            <option value="btn">Bank BTN</option>
						                        </select>
				                            </div> 
										</div>
									</div>
									<hr>
									<div class="row" style="margin-top: 20px">
										<div class="col-md">
											<h5 style="color: black;"><strong>Bunga Minimal</strong><small>/Tahun</small></h5>
											<h3 style="color: black; margin-top: 15px; text-align: center;">
												<span id="comparebunga-minimalb">0</span> %
											</h3>
										</div>
										<div class="col-md">
											<h5 style="color: black;"><strong>Maksimal Tenor</strong></h5>
											<h3 style="color: black; margin-top: 15px; text-align: center;">
												<span id="comparemax-tenorb">0</span> Tahun
											</h3>
										</div>
									</div>
									<hr>
									<div class="row" style="margin-top: 20px">
										<div class="col-md">
											<h5 style="color: black;"><strong>Cicilan Pokok</strong><small>/Bulan</small></h5>
											<h3 style="color: black; margin-top: 15px; text-align: center;">
												Rp. <span id="comparetotalcicilanbankb">0</span>
											</h3>
										</div>
										<div class="col-md">
											<h5 style="color: black;"><strong>Cicilan Bunga</strong><small>/Bulan</small></h5>
											<h3 style="color: black; margin-top: 15px; text-align: center;">
												Rp. <span id="comparetotalbungabankb">0</span>
											</h3>
										</div>
									</div>
									<hr>
									<div class="row" style="margin-top: 20px">
										<div class="col-md">
											<h5 style="color: black;"><strong>Total Pembayaran Angsuran</strong><small>/Bulan</small></h5>
											<h3 style="color: black; margin-top: 15px; text-align: center;">
												Rp. <span id="comparetotalangsuranbankb">0</span>
											</h3>
											<hr style="margin-bottom: -3px;">
												<small><strong>NB : </strong> Perhitungan dilakukan hanya dengan suku bunga fixed.</small>
											<hr style="margin-top: -3px;">
										</div>
									</div>

								</div>
							</div>
						</div> --}}
						{{-- sisi kanan end --}}
					{{-- </div>
				</div>
			</div>
		</div>
	</div> --}}
	{{-- Compare KPR End --}}
</section>

<!-- Modal Mandiri -->
<div class="modal fade" id="bankMandiri" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<img src="{{ asset('BankIcon/mandiri.png') }}" style="height: 60px; width: 120px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="font-size: 12px; margin-top: 10px;">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Limit Kredit</th>
							<th scope="col">36 Bulan</th>
							<th scope="col">48 Bulan</th>
							<th scope="col">60 Bulan</th>
							<th scope="col">72 Bulan</th>
							<th scope="col">84 Bulan</th>
							<th scope="col">96 Bulan</th>
							<th scope="col">108 Bulan</th>
							<th scope="col">120 Bulan</th>
							<th scope="col">132 Bulan</th>
							<th scope="col">144 Bulan</th>
							<th scope="col">156 Bulan</th>
							<th scope="col">168 Bulan</th>
							<th scope="col">180 Bulan</th>
							<th scope="col">240 Bulan</th>
						</tr>
					</thead>
					<tbody>
					@foreach($mandiri as $m)
						<tr>
							<th>{{ "" . number_format($m->limit_kredit , 0, ",", "." ) }}</th>
							<td>{{ "" . number_format($m->satu , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->dua , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->tiga , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->empat , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->lima , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->enam , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->tujuh , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->delapan , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->sembilan , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->sepuluh , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->sebelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->duabelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->tigabelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($m->empatbelas , 0, ",", "." ) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
{{-- Modal Mandiri End --}}

<!-- Modal BNI -->
<div class="modal fade" id="bankBNI" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<img src="{{ asset('BankIcon/bni.png') }}" style="height: 40px; width: 120px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="font-size: 12px; margin-top: 10px;">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Limit Kredit</th>
							<th scope="col">12 Bulan</th>
							<th scope="col">24 Bulan</th>
							<th scope="col">36 Bulan</th>
							<th scope="col">48 Bulan</th>
							<th scope="col">60 Bulan</th>
							<th scope="col">72 Bulan</th>
							<th scope="col">84 Bulan</th>
							<th scope="col">96 Bulan</th>
							<th scope="col">108 Bulan</th>
							<th scope="col">120 Bulan</th>
							<th scope="col">180 Bulan</th>
							<th scope="col">240 Bulan</th>
						</tr>
					</thead>
					<tbody>
					@foreach($bni as $bn)
						<tr>
							<th>{{ "" . number_format($bn->limit_kredit , 0, ",", "." ) }}</th>
							<td>{{ "" . number_format($bn->satu , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bn->dua , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bn->tiga , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bn->empat , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bn->lima , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bn->enam , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bn->tujuh , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bn->delapan , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bn->sembilan , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bn->sepuluh , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bn->sebelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bn->duabelas , 0, ",", "." ) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
{{-- Modal BNI End --}}

<!-- Modal BRI -->
<div class="modal fade" id="bankBRI" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<img src="{{ asset('BankIcon/bri.png') }}" style="height: 60px; width: 120px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="font-size: 12px; margin-top: 10px;">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Limit Kredit</th>
							<th scope="col">12 Bulan</th>
							<th scope="col">24 Bulan</th>
							<th scope="col">36 Bulan</th>
							<th scope="col">48 Bulan</th>
							<th scope="col">60 Bulan</th>
							<th scope="col">72 Bulan</th>
							<th scope="col">120 Bulan</th>
							<th scope="col">180 Bulan</th>
							<th scope="col">240 Bulan</th>
							<th scope="col">300 Bulan</th>
						</tr>
					</thead>
					<tbody>
					@foreach($bri as $br)
						<tr>
							<th>{{ "" . number_format($br->limit_kredit , 0, ",", "." ) }}</th>
							<td>{{ "" . number_format($br->satu , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($br->dua , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($br->tiga , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($br->empat , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($br->lima , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($br->enam , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($br->tujuh , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($br->delapan , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($br->sembilan , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($br->sepuluh , 0, ",", "." ) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
{{-- Modal BRI End --}}

<!-- Modal BCA -->
<div class="modal fade" id="bankBCA" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<img src="{{ asset('BankIcon/bca.png') }}" style="height: 60px; width: 120px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="font-size: 12px; margin-top: 10px;">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Limit Kredit</th>
							<th scope="col">32 Bulan</th>
							<th scope="col">48 Bulan</th>
							<th scope="col">60 Bulan</th>
							<th scope="col">72 Bulan</th>
							<th scope="col">84 Bulan</th>
							<th scope="col">96 Bulan</th>
							<th scope="col">108 Bulan</th>
							<th scope="col">120 Bulan</th>
							<th scope="col">132 Bulan</th>
							<th scope="col">144 Bulan</th>
							<th scope="col">156 Bulan</th>
							<th scope="col">168 Bulan</th>
							<th scope="col">180 Bulan</th>
							<th scope="col">240 Bulan</th>
						</tr>
					</thead>
					<tbody>
					
					</tbody>
				</table>
				Data Belum Tersedia
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
{{-- Modal BCA End --}}

<!-- Modal BTN -->
<div class="modal fade" id="bankBTN" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<img src="{{ asset('BankIcon/btn.png') }}" style="height: 40px; width: 120px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="font-size: 12px; margin-top: 10px;">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Limit Kredit</th>
							<th scope="col">12 Bulan</th>
							<th scope="col">24 Bulan</th>
							<th scope="col">36 Bulan</th>
							<th scope="col">48 Bulan</th>
							<th scope="col">60 Bulan</th>
							<th scope="col">72 Bulan</th>
							<th scope="col">84 Bulan</th>
							<th scope="col">96 Bulan</th>
							<th scope="col">108 Bulan</th>
							<th scope="col">120 Bulan</th>
							<th scope="col">132 Bulan</th>
							<th scope="col">144 Bulan</th>
							<th scope="col">156 Bulan</th>
							<th scope="col">168 Bulan</th>
							<th scope="col">180 Bulan</th>
							<th scope="col">192 Bulan</th>
							<th scope="col">204 Bulan</th>
							<th scope="col">216 Bulan</th>
							<th scope="col">228 Bulan</th>
							<th scope="col">240 Bulan</th>
						</tr>
					</thead>
					<tbody>
					@foreach($btn as $bt)
						<tr>
							<th>{{ "" . number_format($bt->limit_kredit , 0, ",", "." ) }}</th>
							<td>{{ "" . number_format($bt->satu , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->dua , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->tiga , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->empat , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->lima , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->enam , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->tujuh , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->delapan , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->sembilan , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->sepuluh , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->sebelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->duabelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->tigabelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->empatbelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->limabelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->enambelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->tujuhbelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->delapanbelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->sembilanbelas , 0, ",", "." ) }}</td>
							<td>{{ "" . number_format($bt->duapuluh , 0, ",", "." ) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
{{-- Modal BTN End --}}
@stop