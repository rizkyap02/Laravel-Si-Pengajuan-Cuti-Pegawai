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
                <h3 class="card-title">Data Laporan Cuti</h3>
                <a href="/cetak" class="btn btn-outline-primary float-right col-md-1">Cetak</a>
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
                          <td><?php echo e($data->nama); ?></td>
                          


                          <td style="width: 10%;"><?php echo e($cuti->mulai_cuti->format('d - m - yy')); ?></td>
                          <td style="width: 10%;"><?php echo e($cuti->akhir_cuti->format('d - m - yy')); ?></td>
                          <td style="text-transform: capitalize;"><?php echo e($cuti->jenis_cuti); ?></td>

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
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sicuti/resources/views/layouts/adminlaporan.blade.php ENDPATH**/ ?>