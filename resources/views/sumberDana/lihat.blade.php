@extends('layouts.base')

@section('main')

    <form>

          <div class="form-group">
            <label for="exampleInputEmail1">Kode</label>
            <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $sumberDana->kode }}" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $sumberDana->nama }}" readonly>
          </div>
        </form>
@endsection
