@extends('base')
@section('title','Kategori')
@section('breadcrumb','Data')
@section('kategori','active')
@section('konten')
	<div class="card mb-3">
      <div class="card-header text-right">
          <a href="{{route('kategori.create')}}" class="btn btn-primary pull-right">Tambah</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th width="1">No</th>
                <th>Kategori</th>
                <th width="1">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($kategori as $value)
              <tr>
                <td width="1">{{$value->id_kategori}}</td>
                <td>{{$value->nama}}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{route('kategori.edit',$value->id_kategori)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('kategori.destroy', $value->id_kategori)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection