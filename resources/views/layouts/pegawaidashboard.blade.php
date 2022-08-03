@extends('layouts.masterpegawai')
@section('css')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{'asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'}}">
  <link rel="stylesheet" href="{{'asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'}}">
@endsection
@section('body')
<div class="alert alert-info mt-3" role="alert">
        Selamat Datang di Halaman Sistem Informasi Cuti
</div>

@endsection
@section('javascript')
<!-- DataTables -->
<!-- DataTables -->
<script src="{{'asset/plugins/datatables/jquery.dataTables.min.js'}}"></script>
<script src="{{'asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'}}"></script>
<script src="{{'asset/plugins/datatables-responsive/js/dataTables.responsive.min.js'}}"></script>
<script src="{{'asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{'asset/dist/js/demo.js'}}"></script>
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
