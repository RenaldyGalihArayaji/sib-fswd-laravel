@extends('layouts.main')
@section('content')
    <div class="container">
        <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Slider</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a>
    </div>
    <div class="card shadow mb-4 p-2 mx-5">
        <form class="p-4" method="post" action="/slider-store" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" id="title" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" class="form-control" name="image" id="image" required>
              </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </div>
    </div>

@endsection