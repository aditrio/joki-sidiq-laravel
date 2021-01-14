@extends('layouts.dashApp')

@section('header-content')
    Dashboard
@endsection

@section('desc-content')
    E-Modul memudahkan pelajar dan tenaga pelajar dalam memanagement Modul secara online
@endsection

@section('main-content')

    <div class="card bg-primary ">
        <div class="card-body ">
            <h3 class="text-light">Modul</h3>
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="text-light"> <i class="fa fa-book" aria-hidden="true"></i> <span class="mr-2"></span> {{count($data)}}</h2>
                </div>
            </div>
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
                    
                  </tr>
                </thead>
                <tbody>

                    @forelse($data as $key => $item)
                        <tr>
                            <td scope="row">{{$key + 1}}</td>
                            <td hidden>{{$item->id}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->desc}}</td>
                            <td hidden>{{$item->file}}</td>
                            <td><a href="../modul/{{$item->file}}" download="modul-{{$item->file}}" class="btn btn-danger btn-sm"><i class="fas fa-download    "></i> Download</a></td>
                           
                        </tr>
                        @empty
                        
                        <center class="text-danger">Tidak Ada Data</center>
                        <br>
                    @endforelse
                  
                  
                </tbody>
              </table>
        </div>
    </div>
   
@endsection