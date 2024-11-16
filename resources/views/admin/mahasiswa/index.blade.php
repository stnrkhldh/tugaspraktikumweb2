@extends('layouts.app')
@section('content')
<div class="container p-4">
    <div class="card">
        <div class="card-header">
            Data Mahasiswa
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md">
                <form action="{{route('mahasiswa.index')}}">
                <input type="text" name="keyword" class="form-control"
                placeholder="Cari Berdasarkan nama dan jurusan....." value="{{old('keyword')}}" />
               
                    </form>
                </div>
            <div class="col-mid">
                <div class=fload-mid>
                    <a href="{{route('mahasiswa.print')}}" class="btn btn-success" target="__blank">Cetak data</a>
                    <a href="{{route('mahasiswa.create')}}" class="btn btn-primary">Tambah data</a>
                </div>
            </div>
                </div>
            </div>
            
                            
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Jurusan</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $data)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->jurusan}}</td>
            <td>{{$data->npm}}</td>
            <td>{{$data->nama}}</td>
            <td>{{Carbon\carbon::parse($data->tanggal_lahir)->format('d-m-Y')}}</td>
            <td>
                <img src="{{asset('storage/mahasiswa/'.$data->foto)}}" alt="" width="60">
            </td>
            <td>
                <form action="{{route('mahasiswa.delete',$data->id)}}" method="post">
                    @csrf
                    @method('delete')
                <a href="{{route('mahasiswa.edit',$data->id)}}" class="btn btn-warning">Edit</a>
                <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
                
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>
</div>   
@endsection