<?php $__env->startSection('css'); ?>
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo e('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
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
                      <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php
                      foreach ($data->cuti as $cuti) {
                          # code...
                          if(isset($cuti->mulai_cuti)){
                      }
                      ?>
                      <tr class="justify-content-center">
                          


                          <td class="text-center" style="width: 10%;"><?php echo e($cuti->created_at->format('d - m - yy')); ?></td>
                          
                          <td><?php echo e($data->nip); ?></td>
                          <td style="width: 20%;"><?php echo e($data->nama); ?></td>
                          


                          <td style="width: 10%;"><?php echo e($cuti->mulai_cuti->format('d - m - yy')); ?></td>
                          <td style="width: 10%;"><?php echo e($cuti->akhir_cuti->format('d - m - yy')); ?></td>
                          <td style="text-transform: capitalize;"><?php echo e($cuti->jenis_cuti); ?></td>
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
                      <form action="<?php echo e(route('adminpermohonan.destroy',$cuti->id)); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <span class="table-information">
                        <a href="#" class="btn btn-primary show-modal" data-toggle="modal" data-target="#exampleModal"  data-id="<?php echo e($cuti->id); ?>">
                                <i class="fa fa-info-circle"></i>
                        </a>
                    </span><?php
                    if ($cuti->status!='disetujui') {?>
                                <a href="<?php echo e(route('adminpermohonan.edit',$cuti->id)); ?>" onclick="return confirm('Yakin ingin menyetujui permohonan ?')" class="btn btn-success edit-data"  data-id="#">
                                    <i class="fa fa-check"></i>
                                </a>
                            <?php }
                            if ($cuti->status!='gagal') {?>
                                <span class="table-information"><button  class="btn btn-danger del-data" onclick="return confirm('Yakin ingin menolak permohonan ?')" data-id="#">
                                    <i class="fa fa-minus-circle"></i>
                                </button></span> <?php } ?>
                            </form>
                        </td>
                        
                    </tr>
                <?php }?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<!-- DataTables -->
<!-- DataTables -->
<script src="<?php echo e('asset/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo e('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo e('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo e('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e('asset/dist/js/demo.js'); ?>"></script>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sicuti/resources/views/layouts/adminpermohonan.blade.php ENDPATH**/ ?>