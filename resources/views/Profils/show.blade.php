@extends('layouts.nav')

@section('title', 'Profil Toko')

@section('content')
<div class="card">
    <div class="card-body">
        <h3>Nama Toko : {{ $profils['namatoko'] }} </h3>
        <h3>Alamat Toko : {{ $profils['alamat'] }} </h3>
        <h3>Kota : {{ $profils['kota'] }} </h3>
    </div>
</div>
@endsection