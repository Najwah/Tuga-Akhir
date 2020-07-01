@extends('layouts.base')

@section('main')

    <form action="{{route('sumberDana.update', $sumberDana->id)}}" method='post' enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
            <label for="exampleInputEmail1">Kode</label>
            <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $sumberDana->kode }}" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $sumberDana->nama }}" >
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection
