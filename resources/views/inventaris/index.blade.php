@extends('layouts.base')

@section('main')
    <h1 align="middle">Daftar Inventaris</h1>

    <a href="{{route('inventaris.create')}}" > <button type="button" class="btn btn-primary my-4">Tambah</button></a>
    <table class="table">
        <thead class="thead-dark" align="middle">
          <tr class="d-flex">
            <th class="col-1" scope="col">id</th>
            <th class="col-2" scope="col">Nama Barang</th>
            <th class="col-2" scope="col">Nomor Inventaris</th>
            <th class="col-1" scope="col">Tahun Perolehan</th>
            <th class="col-1" scope="col">Sumber Dana</th>
            <th class="col-1" scope="col">Kondisi</th>
            <th class="col-1" scope="col">Tempat</th>
            <th class="col-1" scope="col">Jenis Barang</th>
            <th class="col-1" scope="col">Peruntukan</th>
            <th class="col-1" scope="col">Aksi</th>
          </tr>
          </tr>
        </thead>
        <tbody align="middle">
         @foreach ($inventaris as $inventaris)
         <tr class="d-flex">
            <th class="col-1">{{$inventaris->id}}</th>
            <td class="col-2">{{$inventaris->barang->nama}}</td>
            <td class="col-2">{{$inventaris->nomor_inventaris}}</td>
            <td class="col-1">{{$inventaris->tahun_perolehan}}</td>
            <td class="col-1">{{$inventaris->sumberDana->nama}}</td>
            <td class="col-1">{{$inventaris->kondisi}}</td>
            <td class="col-1">{{$inventaris->tempat}}</td>
            <td class="col-1">
                @if ($inventaris->habis_pakai)
                    {{"Habis Pakai"}}
                @else
                    {{"Barang Modal"}}
                @endif
            </td>
            <td class="col-1">{{$inventaris->peruntukan->nama}}</td>
            <td class="col-1">
                {{-- <a href="{{route ('peruntukan.show', $peruntukan->id)}}" > <button type="button" class="btn btn-warning">lihat</button></a>
                <a href="{{route ('peruntukan.edit', $peruntukan->id)}}"> <button type="button" class="btn btn-success">edit</button></a>
                <form style="display: inline" action="{{route('peruntukan.destroy',$peruntukan->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">hapus</button>
                </form> --}}
            </td>
        </tr>

          @endforeach
        </tbody>
      </table>
@endsection
