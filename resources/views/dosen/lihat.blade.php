@extends('layouts.base')

@section('main')

    <form>

          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $dosen->nama }}" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jurusan</label>
            <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $dosen->jurusan }}" readonly>
          </div>
        </form>
@endsection
