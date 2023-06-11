@extends('login.main')

@section('content')
    
<main class="form-register w-100 m-auto">
    <form action="/registrasi" method="post">
        @csrf
      <h1 class="h3 mb-3 fw-normal text-center"><strong>Resgistration</strong></h1>
  
      <div class="form-floating">
        <input type="text" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="name" name="name" value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" name="email"  value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" name="password" >
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
  
      <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Registrasi</button>
      <small class=" mt-3">Registrasi?<a href="/login">Login</a></small>
    </form>
  </main>

@endsection