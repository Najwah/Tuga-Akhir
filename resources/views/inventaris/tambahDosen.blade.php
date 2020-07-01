@extends('layouts.base')

@section('sidebar')
<ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>
@endsection

@section('main')
<h1> Tambah Inventaris Dosen</h1>
<form class="mt-5" action="{{route('inventaris.store')}}" method='post'>
    @csrf
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Barang</label>
      <div class="col-sm-10">
        <select name="barang" class="form-control" disabled>
            @foreach ($barang as $barang)
                @if ($barang->id == $data["barang"])
                    <option value="{{$barang->id}}" selected>{{$barang->nama}}</option>
                @else
                    <option value="{{$barang->id}}">{{$barang->nama}}</option>
                @endif
            @endforeach
        </select>
      </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Sumber Dana</label>
        <div class="col-sm-10">
          <select name="sumber_dana" class="form-control" disabled>
              @foreach ($sumberDana as $sumberDana)
                @if ($sumberDana->id == $data["sumber_dana"])
                    <option value="{{$sumberDana->id}}" selected>{{$sumberDana->nama}}</option>
                @else
                    <option value="{{$sumberDana->id}}">{{$sumberDana->nama}}</option>
                @endif
              @endforeach
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tahun Perolehan</label>
        <div class="col-sm-10">
        <input type="number" min="1900" max="2099" name="tahun_perolehan" disabled value="{{$data["tahun_perolehan"]}}"/>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tempat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="tempat" disabled value="{{$data["tempat"]}}"/>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kondisi Barang</label>
        <div class="col-sm-10">
            <div class="form-check">
                @if ($data["kondisi"] == "BL")
                    <input class="form-check-input" type="radio" name="kondisi" id="exampleRadios1" value="BL"  checked>
                @else
                    <input class="form-check-input" type="radio" name="kondisi" id="exampleRadios1" value="BL" disabled>
                @endif
                <label class="form-check-label" for="exampleRadios1">
                  Baik dan Lengkap (BL)
                </label>
              </div>
              <div class="form-check">
                @if ($data["kondisi"] == "BT")
                    <input class="form-check-input" type="radio" name="kondisi" id="exampleRadios1" value="BT" checked>
                @else
                    <input class="form-check-input" type="radio" name="kondisi" id="exampleRadios1" value="BT" disabled>
                @endif
                <label class="form-check-label" for="exampleRadios1">
                  Baik Tidak Lengkap (BT)
                </label>
              </div>
              <div class="form-check">
                @if ($data["kondisi"] == "RR")
                    <input class="form-check-input" type="radio" name="kondisi" id="exampleRadios1" value="RR" checked>
                @else
                    <input class="form-check-input" type="radio" name="kondisi" id="exampleRadios1" value="RR" disabled>
                @endif
                <label class="form-check-label" for="exampleRadios1">
                  Rusak Ringan (RR)
                </label>
              </div>
              <div class="form-check">
                @if ($data["kondisi"] == "RB")
                    <input class="form-check-input" type="radio" name="kondisi" id="exampleRadios1" value="RB" checked>
                @else
                    <input class="form-check-input" type="radio" name="kondisi" id="exampleRadios1" value="RB" disabled>
                @endif
                <label class="form-check-label" for="exampleRadios1">
                  Rusak Berat (BB)
                </label>
              </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Dosen</label>
        <div class="col-sm-10">
            <select name="dosen" class="form-control">
                @foreach ($dosen as $dosen)
                    <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                @endforeach
            </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">submit</button>
</form>
@endsection
