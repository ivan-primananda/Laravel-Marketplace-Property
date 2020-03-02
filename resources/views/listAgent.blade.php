@extends('layouts.master')

@section('content')

<!-- Jumbotron -->
<section id="main-slider">
    <div class="jumbotron-properties" style="background-image: url('assets/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg'); background-size: 100% 200%;">
        <h1 class="judul-properties"><hr> List Agent <hr></h1>
    </div>
</section>
<!-- Jumbotron End -->


<!-- Table Agent -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 tablestyle">
                <div class="pull-left">
                    <strong>Jumlah Agent : {{ $jumlahAgent }}</strong>
                </div>
                <br>
                @if (!empty($listAgents))
                    <table class="table">
                        <thead class="thead-dark">
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Domisili</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($listAgents as $agent):
                                <tr>
                                    <td>{{ $agent->full_name }}</td>
                                    <td>{{ $agent->email }}</td>
                                    <td>{{ $agent->phone }}</td>
                                    <td>{{ $agent->domisili }}</td>
                                    <td><button class="btnDetail"><a href="/listAgent/detail/{{ $agent->id }}">Detail</a></button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h2>Tidak ada daftar Agent!</h2>
                @endif
            </div>
            <div class="col-md-12 col-md-offset-5">
                {{ $listAgents->links()}}    
            </div>
        </div>
    </div>
</section>
<!-- Table Agent End -->


@stop