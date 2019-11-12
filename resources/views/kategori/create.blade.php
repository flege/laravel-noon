@extends('base')
@section('title','Kategori')
@section('breadcrumb','Tambah')
@section('kategori','active')
@section('konten')
<form action="{{route('kategori.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label>Nama Kategori</label>
    <input type="text" name="nama" class="form-control" placeholder="...">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection