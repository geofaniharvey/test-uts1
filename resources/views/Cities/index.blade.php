@extends('layouts.nav')

@section('title', 'Kota Terdaftar')

@section('content')
<a href="/cities/create" class="card-link btn-primary">Tambah Kota</a>

@foreach ($cities as $city)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/cities/{{ $city['id'] }}"class="card-title">{{ $city['namakota'] }}</a>
    <p class="card-text">{{ $city['keterangan'] }}.</p>
      <hr>
        <a href="" class="card-link btn-primary">Tambah anggota city</a>
          @foreach ($city->profils as $profil)
          <li> {{$profil->namatoko}} </li>
          @endforeach

        <hr>
    <a href="/cities/{{ $city['id'] }}/edit" class="card-link btn-warning">Edit city</a>
    <form action="/cities/{{ $city['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete city</button>
    </form>
  </div>
</div>
  
@endforeach
<div>
    {{ $cities->links() }}
</div>
@endsection