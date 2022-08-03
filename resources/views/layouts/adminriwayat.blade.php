@extends('layouts.master')
@section('css')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('body')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Data Riwayat Cuti -  {{$pegawai->nama}}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                      <th>Tanggal Pengajuan</th>
                      <th>Mulai</th>
                      <th>Berakhir</th>
                      <th>Jenis</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($pegawai->cuti as $cuti)
                        <tr>
                          <td class="text-center" >{{$cuti->created_at->format('d - m - yy')}}</td>
                          <td class="text-center">{{$cuti->mulai_cuti->format('d - m - yy')}}</td>
                          <td class="text-center">{{$cuti->akhir_cuti->format('d - m - yy')}}</td>
                          <td style="text-center; text-transform: capitalize;">{{$cuti->jenis_cuti}}</td>
                          <?php
                          if ($cuti->status=='belum') {
                              # code...
                              echo '<td ">
                                <span class="badge badge-warning" style="color: white;">Belum Diverifikasi</span>
                                </td>';
                            }
                            if ($cuti->status=='disetujui') {
                                # code...
                                echo '<td ">
                                    <span class="badge badge-success" style="color: white;">Disetujui</span>
                                    </td>';
                                }
                                if ($cuti->status=='gagal') {
                                    # code...
                                    echo '<td ">
                                        <span class="badge badge-danger" style="color: white;">Tidak Disetujui</span>
                                        </td>';
                                    }
                          ?>
                          <td>
                              <span class="table-information" ><a href="{{route('print',$cuti->id)}}"  class="btn btn-primary info-data"  data-id="#">
                                <i class="fa fa-print"></i>
                              </a></span>

                          </td>
                        </tr>

                        @endforeach
                    {{--  --}}

                    </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
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
