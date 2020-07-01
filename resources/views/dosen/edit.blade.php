@extends('layouts.base')

@section('main')

    <form action="{{route('dosen.update', $dosen->id)}}" method='post' enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $dosen->nama }}" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $dosen->jurusan }}" >
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection
