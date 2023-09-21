@extends('layouts.main')

@section('container') {{-- mengambil  @yield('container') pada layout/main --}}
<div class="row justify-content-center">
    <div class="col-md-5">
      @if(session()->has('loginError'))
      <div class="alert alert-danger" role="alert">
        {{ session('loginError') }}
      </div>
      @endif
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal">Please lOGIN</h1>
            <form action="/login" method="post">              
              @csrf
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                <label for="username">username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
                        
              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>              
            </form>
            <small class="d-block text-center mt-3">belom akun? <a href="/register">register</a></small>
        </main>
    </div>
</div>

@endsection