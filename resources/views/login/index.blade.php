@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
      <div class="col-md-4">

        @if(session()->has('success'))
        <div class="alert alert-success dismissible fade show" role="alert">
          {{ sesion('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        @endif
        {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
            <main class="form-signin w-100 m-auto">
                  <h1 class="h3 mb-3 mb-3 fw-normal text-center">Please Log in</h1>
                  <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                      <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus value="{{ old('email') }}">
                      <label for="email">Email address</label>
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>        
                      @enderror
                    </div>
                    <div class="form-floating mt-2">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                      <label for="password">Password</label>
                    </div>
                    <div>
                      <select class="form-select" name="level_akses" id="level_akses" class="form-control @error('level_akses') is-invalid @enderror">
                        <option selected>Level Akses</option>
                        <option value="Admin">Admin</option>
                        <option value="Guru">Guru</option>
                      </select>
                      @error('level_akses')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                        @enderror
                    </div>
                    <div class="checkbox mb-3 mt-3">
                      <label>
                        <input type="checkbox" value="remember-me"> Remember me
                      </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                  </form>
                  <small class="d-block text-center mt-3">Not registered? <a href="/register">register now</a></small>
                </main>
                
      </div>
</div>

@endsection