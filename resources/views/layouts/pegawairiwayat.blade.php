@extends('layouts.masterpegawai')
@section('css')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{'asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'}}">
  <link rel="stylesheet" href="{{'asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'}}">
@endsection
@section('body')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Data Riwayat Cuti</h3>
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
                  @foreach ($pegawai as $data)
                  <?php
                  foreach ($data->cuti as $cuti) {
                      # code...
                      if(isset($cuti->mulai_cuti)){
                  }
                  ?>
                      {{-- @foreach ($data->cuti as $cuti) --}}
                  <tr class="justify-content-center">


                      <td class="text-center" style="width: 20%;">{{$cuti->created_at->format('d - m - yy')}}</td>
                      <td class="text-center" style="width: 20%;">{{$cuti->mulai_cuti->format('d - m - yy')}}</td>
                      <td class="text-center" style="width: 20%;">{{$cuti->akhir_cuti->format('d - m - yy')}}</td>
                      <td style="text-transform: capitalize; text-align: center;" >{{$cuti->jenis_cuti}}</td>
                      <?php
                  if ($cuti->status=='belum') {
                      # code...
                      echo '<td ; ">
                        <span class="badge badge-warning" style="color: white; ">Belum Diverifikasi</span>
                        </td>';
                    }
                    if ($cuti->status=='disetujui') {
                        # code...
                        echo '<td ; ">
                            <span class="badge badge-success" style="color: white;">Disetujui</span>
                            </td>';
                        }
                        if ($cuti->status=='gagal') {
                            # code...
                            echo '<td ; ">
                                <span class="badge badge-danger" style="color: white;">Tidak Disetujui</span>
                                </td>';
                            }
                            ?>

                    <td>
                        @if ($cuti->status=='disetujui')

                        <span class="table-information" ><a href="{{route('print',$cuti->id)}}" target="_blank"  class="btn btn-primary info-data"  data-id="#">
                            <i class="fa fa-print"></i>
                        </a></span>

                        @endif
                    </td>
                </tr>
                {{-- @endforeach --}}
            <?php }?>
                @endforeach

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
