@extends('templateauth.app')

@section('content')
<div class="login-box">
    @php
    // Mengambil data menggunakan model Webset
    $setweb = App\Models\setweb::first(); // Anda bisa sesuaikan query ini dengan kebutuhan Anda
    @endphp
    <div class="login-logo">
        <a href="../../index2.html">
            <img src="{{ asset('webset/'.$setweb->logo_app) }}" style="width: 200px; height: auto;">
        </a>

    </div>

    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start  {{ $setweb->name_app }}</p>

        <form action="{{ route('login') }}" method="post">
        @csrf

          <div class="input-group mb-3">
            <input type="text"  class="form-control" name="input_type" id="input_type"  value="<?= htmlspecialchars(old('input_type')) ?>" required autofocus placeholder="Email" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>




          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" id="password" name="password" equired autocomplete="current-password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" id="remember_me" name="remember" >
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center mb-3">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div>
        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection