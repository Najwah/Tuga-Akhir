@extends('layouts.base')

@section('main')
    <h1 align="middle">List Nama Laboratorium JTI</h1>

    <a href="{{route('lab.create')}}" > <button type="button" class="btn btn-primary my-4">Tambah</button></a>
    <table class="table">
        <thead class="thead-dark" align="middle">
          <tr class="d-flex">
            <th class="col-1" scope="col">id</th>
            <th class="col-2" scope="col">Kode</th>
            <th class="col-5" scope="col">Nama</th>
            <th class="col-4" scope="col">Aksi</th>
          </tr>
          </tr>
        </thead>
        <tbody align="middle">
         @foreach ($lab as $lab)
         <tr class="d-flex">
            <th class="col-1">{{$lab->id}}</th>
            <td class="col-2">{{$lab->kode}}</td>
            <td class="col-5">{{$lab->nama}}</td>
            <td class="col-4">
                <a href="{{route ('lab.show', $lab->id)}}" > <button type="button" class="btn btn-warning">lihat</button></a>
                <a href="{{route ('lab.edit', $lab->id)}}"> <button type="button" class="btn btn-success">edit</button></a>
                <form style="display: inline" action="{{route('lab.destroy',$lab->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">hapus</button>
                </form>
            </td>
        </tr>

          @endforeach
        </tbody>
      </table>
@endsection
