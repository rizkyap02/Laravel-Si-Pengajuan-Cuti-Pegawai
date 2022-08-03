@extends('layouts.master')
@section('css')
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection
@section('body')
<div class="col-md-12">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form class="form-horizontal" action="{{route('adminpegawai.update',$edit->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="card-body">
                  <div class="form-group row">
                  <label>NIP</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="18" name="nip" class="form-control" value="{{$edit->nip}}" placeholder="Masukkan NIP">
                  </div>
                  <div class="form-group row">
                  <label>Nama</label>
                        <input type="text" onkeypress="return /[a-z., ]/i.test(event.key)" name="nama" class="form-control" value="{{$edit->nama}}" placeholder="Masukkan Nama Lengkap" required>
                  </div>
                  <div class="form-group row">
                        <label>Password</label>
                              <input type="password" name="password" class="form-control" value="" placeholder="Masukkan Password">
                              <span class="" style="color: red;">
                                  *note : kosongkan jika tidak ingin mengganti password
                              </span>
                        </div>
                  <div class="form-group row">
                  <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="{{$edit->jabatan}}" placeholder="Masukkan Jabatan" required>
                  </div>
                  <div class="form-group row">
                  <label>Unit</label>
                        <input type="text" name="unit" class="form-control" value="{{$edit->unit}}" placeholder="Masukkan Unit" required>
                  </div>
                  <div class="form-group row">
                  <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="{{$edit->tempat_lahir}}" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group row">
                  <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{$edit->tanggal_lahir}}" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <div class="form-group row">
                  <label>Telepon</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" name="telepon" class="form-control" value="{{$edit->telepon}}" placeholder="Masukkan Telepon">
                  </div>
                  <div class="form-group row">
                  <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{$edit->alamat}}" placeholder="Masukkan Alamat">
                  </div>
                  <div class="form-group row">
                  <label>Email</label>
                        <input type="text" name="email" class="form-control" value="{{$edit->email}}" placeholder="Masukkan Email">
                  </div>
                  <button type="submit" class="btn btn-default float-right" onclick="return confirm('Yakin ingin mengubah data?')">Edit</button>
              </form>
  </div>
</div>
@endsection
@section('javascript')
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
@endsection
