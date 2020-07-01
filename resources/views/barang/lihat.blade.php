@extends('layouts.base')

@section('main')

    <form>

          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $barang->nama }}" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Merk</label>
            <input name="merk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $barang->merk }}" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tipe</label>
            <input name="tipe" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $barang->tipe }}" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Satuan</label>
            <input name="satuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $barang->satuan }}" readonly>
          <div class="form-group">
            <label for="exampleInputEmail1">Spesifikasi</label>
            <textarea name="spesifikasi" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{ $barang->spesifikasi }}" readonly></textarea>
          </div>
          <div class="form-group">
            {{-- <label for="exampleInputEmail1">Foto</label> --}}
            {{-- <input name="foto" type="file" class="form-control-file" id="exampleFormControlFile1"> --}}
          <img src="{{asset($barang->foto)}}" class="col-md-3"/>
          </div>
        </form>
@endsection
