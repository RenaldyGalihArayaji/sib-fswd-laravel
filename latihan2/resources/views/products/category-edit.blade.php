@extends('layouts.main')

@section('content')
    <div class="container">
        <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Data</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a>
    </div>
    <div class="card shadow mb-4 p-2 mx-5">
        <form class="p-4" method="post" action="/category-update">
            @method('put')
            @csrf
            <div class="mb-3">
                <input type="hidden" name="id" value="{{ $data->id }}">
                <label for="name" class="form-label">Name Category</label>
                <input type="text" class="form-control" name="name" id="name" value=" {{ $data->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </div>
    </div>

@endsection