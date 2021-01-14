@extends('layouts.dashApp')

@section('header-content')
    Modul
@endsection

@section('desc-content')
    E-Modul memudahkan pelajar dan tenaga pelajar dalam memanagement Modul secara online
@endsection

@section('main-content')


    <div class="card">
        <div class="card-header">
            
            <button type="burron" class="btn btn-info m-1" data-toggle="modal" data-target="#storeModal">Tambah Modul <i class="fa fa-plus-square" aria-hidden="true"></i></button>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Modul</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">File</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>

                    {{-- @foreach ($data as $key => $item)
                        <tr>
                            <td scope="row">{{$key + 1}}</td>
                            <td hidden>{{$item->id}}</td>
                            <td>{{$item->kelas}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>{{count($item->testArray)}}</td>
                            <td>
                                <button class="btn btn-sm btn-info btn-edit" data-toggle="modal" data-target="#editmodal">Edit</button>
                                <button class="btn btn-sm btn-danger btn-delete" data-toggle="modal" data-target="#deletemodal">Hapus</button>
                            </td>
                        </tr>
                    @endforeach --}}
                  
                  
                </tbody>
              </table>
        </div>
    </div>

@endsection