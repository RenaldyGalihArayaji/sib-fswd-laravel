@extends('layouts.main')

@section('content')
<div class="container">
    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Slider</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a>
</div>
<div class="card shadow mb-4 p-2 mx-5">
    <form class="p-4" method="post" action="{{ url('/slider-update') }}" enctype="multipart/form-data">
      @method('put')
        @csrf
        <div class="mb-3">
          <input type="hidden" name="id" value="{{ $data->id }}" class="form-control">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" required value="{{ $data->title }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <img src="{{ asset('/storage/public/gambar/' . $data->image) }}" class="my-3" alt="" width="60">
            <input type="file" class="form-control" name="image" id="image" >
          </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
</div>
</div>
@endsection