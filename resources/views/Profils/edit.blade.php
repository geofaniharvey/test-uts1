@extends('layouts.nav')

@section('title', 'Edit Toko')

@section('content')
  <form action="/profils/{{ $profil['id'] }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Toko</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="namatoko" aria-describedby="emailHelp" value="{{ old('namatoko') ? old('namatoko') : $profil['namatoko'] }}">
      @error('namatoko')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Alamat Toko</label>
      <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') ? old('alamat') : $profil['alamat']  }}">
      @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Kota</label>
      <input type="text" class="form-control" name="kota" id="exampleInputPassword1" value="{{ old('kota') ? old('kota') : $profil['kota']  }}">
      @error('kota')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
