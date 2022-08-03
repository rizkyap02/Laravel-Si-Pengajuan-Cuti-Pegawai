<?php $__env->startSection('css'); ?>
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Data Riwayat Cuti -  <?php echo e($pegawai->nama); ?></h3>
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
                        <?php $__currentLoopData = $pegawai->cuti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cuti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td class="text-center" ><?php echo e($cuti->created_at->format('d - m - yy')); ?></td>
                          <td class="text-center"><?php echo e($cuti->mulai_cuti->format('d - m - yy')); ?></td>
                          <td class="text-center"><?php echo e($cuti->akhir_cuti->format('d - m - yy')); ?></td>
                          <td style="text-center; text-transform: capitalize;"><?php echo e($cuti->jenis_cuti); ?></td>
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
                              <span class="table-information" ><a href="<?php echo e(route('print',$cuti->id)); ?>"  class="btn btn-primary info-data"  data-id="#">
                                <i class="fa fa-print"></i>
                              </a></span>

                          </td>
                        </tr>

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
  <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<!-- DataTables -->
<!-- DataTables -->
<script src="<?php echo e(asset('asset/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('asset/dist/js/demo.js')); ?>"></script>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sicuti/resources/views/layouts/adminriwayat.blade.php ENDPATH**/ ?>