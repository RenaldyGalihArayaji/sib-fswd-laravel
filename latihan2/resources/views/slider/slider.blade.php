@extends('layouts.main')
@section('content')
    
<div class="container">
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Slider</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/slider-create" class="btn btn-primary">Tambah Data</a>
        </div>

        <div class="card-body">
                    
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success')}}</strong> 
        </div>
        @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Gambar</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $item->title }}</td>
                            <td><img src="{{ asset('/storage/public/gambar/' . $item->image) }}" alt="" width="60" class="image-fluid"></td>
                            <td>  
                                <a href="/slider-edit/{{ $item->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="/slider-delete/{{ $item->id }}" class="btn btn-danger" onclick="confirm('Yakin mau di hapus?')"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Data Masih Kosong</td>
                            </tr>
                        @endforelse
                </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        
    </script>

@endsection