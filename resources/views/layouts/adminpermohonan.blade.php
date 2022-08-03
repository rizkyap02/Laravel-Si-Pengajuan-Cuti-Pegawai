@extends('layouts.master')
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
                <h3 class="card-title">Data Permohonan Cuti</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>Tanggal Pengajuan</th>
                    <th>NIP</th>
                    <th>Nama</th>
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
                      <tr class="justify-content-center">
                          {{-- @foreach ($data->cuti as $cuti) --}}


                          <td class="text-center" style="width: 10%;">{{$cuti->created_at->format('d - m - yy')}}</td>
                          {{-- @endforeach --}}
                          <td>{{$data->nip}}</td>
                          <td style="width: 20%;">{{$data->nama}}</td>
                          {{-- @foreach ($data->cuti as $cuti) --}}


                          <td style="width: 10%;">{{$cuti->mulai_cuti->format('d - m - yy')}}</td>
                          <td style="width: 10%;">{{$cuti->akhir_cuti->format('d - m - yy')}}</td>
                          <td style="text-transform: capitalize;">{{$cuti->jenis_cuti}}</td>
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
                      <form action="{{route('adminpermohonan.destroy',$cuti->id)}}" method="post">
                        {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <span class="table-information">
                        <a href="#" class="btn btn-primary show-modal" data-toggle="modal" data-target="#exampleModal"  data-id="{{$cuti->id}}">
                                <i class="fa fa-info-circle"></i>
                        </a>
                    </span><?php
                    if ($cuti->status!='disetujui') {?>
                                <a href="{{ route('adminpermohonan.edit',$cuti->id) }}" onclick="return confirm('Yakin ingin menyetujui permohonan ?')" class="btn btn-success edit-data"  data-id="#">
                                    <i class="fa fa-check"></i>
                                </a>
                            <?php }
                            if ($cuti->status!='gagal') {?>
                                <span class="table-information"><button  class="btn btn-danger del-data" onclick="return confirm('Yakin ingin menolak permohonan ?')" data-id="#">
                                    <i class="fa fa-minus-circle"></i>
                                </button></span> <?php } ?>
                            </form>
                        </td>
                        {{-- @endforeach --}}
                    </tr>
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
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Permohonan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="isi">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td id="nama"></td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>:</td>
                            <td id="nip"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pengajuan</td>
                            <td>:</td>
                            <td id="tgp"></td>
                        </tr>
                        <tr>
                            <td>Lama Cuti</td>
                            <td>:</td>
                            <td id="lc"></td>
                        </tr>
                        <tr>
                            <td>Jenis Cuti</td>
                            <td>:</td>
                            <td id="jc"></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td id="ket"></td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>
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

  $(document).ready(function(){
      $('.show-modal').on('click',function(){
        var id=$(this).data('id');
        console.log(id);
        $.ajax({
               type:'GET',
               url:'/adminpermohonan/'+id,
               data:id,
               success:function(data) {
                //    console.log(data.pegawai);
                var pegawai=data.pegawai;
                var cuti=data.data;
                var pengajuan=data.pengajuan;
                $('#nama').text(pegawai.nama);
                $('#nip').text(pegawai.nip);
                $('#tgp').text(pengajuan.tgl_pengajuan);
                $('#lc').text(pengajuan.tgl_mulai+" sd "+pengajuan.tgl_akhir);
                $('#jc').text(cuti.jenis_cuti);
                $('#ket').text(cuti.ket);
               }
        });
      })

  })
</script>
@endsection
