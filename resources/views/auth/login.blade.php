@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{'asset/plugins/fontawesome-free/css/all.min.css'}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{'asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css'}}">
  <!-- Theme style -->
<link rel="stylesheet" href="{{'asset/dist/css/adminlte.min.css'}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection
@section('content')
<div class="login-box">
  <div class="login-logo">
      <img src="{{url('asset/dist/img/Logo_Unib.png')}}" alt="UNIB Logo"
      style="width : 100px"><br>
    <a style="font-size : 20px">SISTEM INFORMASI PENGAJUAN CUTI<br>FAKULTAS EKONOMI DAN BISNIS</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        @if(Session::has('alert-danger'))

                <div class="alert alert-danger">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-danger') }}</strong>
                </div>
                <br>
            @endif
        <div class="form-group row">
            <div class="col-md-12">
                <input id="nip" placeholder="Email atau NIP" type="nip" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required  autofocus>

                @error('error')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="input-group mb-3">
          <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4 float-right">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{'asset/plugins/jquery/jquery.min.js'}}"></script>
<!-- Bootstrap 4 -->
<script src="{{'asset/plugins/bootstrap/js/bootstrap.bundle.min.js'}}"></script>
<!-- AdminLTE App -->
<script src="{{'asset/dist/js/adminlte.min.js'}}"></script>
@endsection
