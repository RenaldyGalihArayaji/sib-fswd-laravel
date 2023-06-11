@extends('login.main')

@section('content')
    
<main class="form-signin w-100 m-auto">
    <form action="/login" method="POST">
      @csrf
      <h1 class="h3 mb-3 fw-normal text-center"><strong>Login</strong></h1>

      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('success')}}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('loginError')}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
  
      <div class="form-floating">
        <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" name="email" autofocus value="{{ old('email' )}}">
        <label for="email">Email address</label>
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        <label for="password">Password</label>
      </div>
  
      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
      <small class=" mt-3">Registrasi?<a href="/registrasi">registrasi</a></small>
    </form>
  </main>

@endsection