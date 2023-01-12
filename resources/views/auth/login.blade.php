@extends('layouts.auth')

@section('container')

<div class="login-box" style="width:700px;">
  <div class="login-logo">
    <a href="#" style="font-weight:bold; color:#E13838 ; font-size: 1.8em;">Tuni<b style="font-weight:bold; color:#696969">Car</b></a>
    <hr/>
  </div>
  <!-- /.login-logo -->
  <div class="card bg-dark">
    <div class="card-body bg-light login-card-body">

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
          <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
       
          </div>

        </div>
</form>
<div class="social-auth-links text-center mb-3">
<p>- OU -</p>
<a href="#" class="btn btn-block btn-primary">
<i class="fab fa-facebook mr-2"></i> Se connecter avec Facebook
</a>
<a href="#" class="btn btn-block btn-danger">
<i class="fab fa-google-plus mr-2"></i> Se connecter avec Google
</a>
</div>

<p class="mb-1">
<a href="forgot-password.html">Mot de passe oublié</a>
</p>
          
          <!-- /.col -->
        </div>
      </form>



    </div>
    <!-- /.login-card-body -->
  </div>
</div>
