@extends('layouts.main')

@section('content')
    

<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Daftar Product</h1>
       <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a>
   </div>

   <div class="card shadow mb-4">
       <div class="card-header py-3">
           <a href="/daftar-create" class="btn btn-primary">Tambah Data</a>
       </div>
       <div class="card-body">
       
       @if(session()->has('success'))
           <div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>{{ session('success')}}</strong> 
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
       @endif

           <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                       <tr>
                           <th>No</th>
                           <th>Name</th>
                           <th>Category</th>
                           <th>Qty</th>
                           <th>Price</th>
                           <th>Description</th>
                           <th>Gambar</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @forelse ($data as $item)
                       <tr>
                           <td>{{ $loop->iteration}}</td>
                           <td>{{ $item->name }}</td>
                           <td>{{ $item->category_id }}</td>
                           <td>{{ $item->qty }}</td>
                           <td>{{ $item->price }}</td>
                           <td>{{ $item->description }}</td>
                           <td><img src="{{ asset('/storage/public/gambar_Product/' . $item->image) }}" alt=""></td>
                           <td>  
                               <a href="/category-edit/{{ $item->id }}" class="btn btn-success">Update</a>
                               <a href="/category-delete/{{ $item->id }}" class="btn btn-danger" onclick="confirm('Yakin mau di hapus?')">Delete</a>
                               <a href="" class="btn btn-warning">Detail</a>
                           </td>
                       </tr>
                       @empty
                           <tr>
                               <td colspan="8" class="text-center">Data Masih Kosong</td>
                           </tr>
                       @endforelse
               </tbody>
               </table>
           </div>
       </div>
</div>

@endsection