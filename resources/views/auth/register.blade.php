@extends('layouts.layout_auth')
@section('title', "Register")
@section("content")
<div class="container">
<div class="row" style="padding-top: 50px">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="form-login" style="text-align: center;">
<h4>Register</h4>
</div>
<form method="post" action="{{ route('register') }}">
@csrf
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name')}}" required>
@error('name')
<div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
</div>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" value="{{ old('email')}}" required>
@error('email')
<div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
@error('password')
<div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
</div>
<div class="form-group">
<label>Password Confirmation</label>
<input type="password" name="password_confirmation" class="form-control" placeholder="Retype Password">
</div>
<div class="form-group">
<label>Gender</label>
<select name="gender" id="gender" class="form-control">
<option disabled selected>Jenis Kelamin</option>
<option value="laki">Laki-Laki</option>
<option value="perempuan">Perempuan</option>
</select>
</div>
<button type="submit" class="btn btn-primary">Register</button>
</form>
<br>
sudah punya akun ? <a href="{{ url('/auth/login') }}">Login</a>
</div>
</div>
</div>
@endsection