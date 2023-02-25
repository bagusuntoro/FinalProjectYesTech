@extends('layouts.layout_auth')
@section('title', "Login")
@section("content")
<div class="container">
<div class="row" style="padding-top: 50px">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="form-login" style="text-align: center;">
<h4>Login</h4>
</div>
@if (session("success"))
<div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session("loginError"))
<div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('loginError') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<form method="post" action="{{ route('login') }}">
  @csrf
<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Name email" autofocus required>
@error('email')
<div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" id="password" placeholder="Password" autofocus required>
</div>
<button type="submit" class="btn btn-primary">Login</button>
</form>
<br>
belum punya akun ? <a href="{{ route('register') }}">Register</a>
</div>
</div>
</div>
@endsection

