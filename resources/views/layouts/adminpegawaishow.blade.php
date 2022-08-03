@extends('layouts.master')
@section('css')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('body')
<div class="col-md-12">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Detail Pegawai</h3>
              </div>
                <div class="card-body">
                  <div class="form-group row">
                  <label>NIP</label>
                        <h4 class="form-control" > {{$show->nip}} </h4>
                  </div>
                  <div class="form-group row">
                  <label>Nama</label>
                        <h4 class="form-control" > {{$show->nama}} </h4>
                  </div>
                  <div class="form-group row">
                  <label>Jabatan</label>
                        <h4 class="form-control" > {{$show->jabatan}} </h4>
                  </div>
                  <div class="form-group row">
                  <label>Unit</label>
                        <h4 class="form-control" > {{$show->unit}} </h4>
                  </div>
                  <div class="form-group row">
                  <label>Tempat Lahir</label>
                         <h4 class="form-control" > {{$show->tempat_lahir}} </h4>
                  </div>
                  <div class="form-group row">
                  <label>Tanggal Lahir</label>
                         <h4 class="form-control" > {{$show->tanggal_lahir}} </h4>
                  </div>
                  <div class="form-group row">
                  <label>Telepon</label>
                         <h4 class="form-control" > {{$show->telepon}} </h4>
                  </div>
                  <div class="form-group row">
                  <label>Alamat</label>
                         <h4 class="form-control" > {{$show->alamat}} </h4>
                  </div>
                  <div class="form-group row">
                  <label>Email</label>
                         <h4 class="form-control" > {{$show->email}} </h4>
                  </div>
  </div>
</div>
@endsection
@section('javascript')
<!-- DataTables -->
<!-- DataTables -->
<script src="{{asset('asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('asset/dist/js/demo.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection