@extends('layouts.nav')

@section('title', 'Profil Toko')

@section('content')
<a href="/profils/create" class="card-link btn-primary">Tambah Toko</a>

@foreach ($profils as $profil)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/profils/{{ $profil['id'] }}"class="card-title">{{ $profil['namatoko'] }}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{ $profil['alamat'] }}</h6>
    <p class="card-text">{{ $profil['kota'] }}.</p>
    
    <a href="/profils/{{ $profil['id'] }}/edit" class="card-link btn-warning">Edit Toko</a>
    <form action="/profils/{{ $profil['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete Toko</button>
    </form>
  </div>
</div>
  
@endforeach
<div>
    {{ $profils->links() }}
</div>
@endsection