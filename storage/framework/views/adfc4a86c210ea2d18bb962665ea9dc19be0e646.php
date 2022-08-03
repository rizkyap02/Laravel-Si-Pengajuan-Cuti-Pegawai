<?php $__env->startSection('css'); ?>
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="col-md-12">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Detail Pegawai</h3>
              </div>
                <div class="card-body">
                  <div class="form-group row">
                  <label>NIP</label>
                        <h4 class="form-control" > <?php echo e($show->nip); ?> </h4>
                  </div>
                  <div class="form-group row">
                  <label>Nama</label>
                        <h4 class="form-control" > <?php echo e($show->nama); ?> </h4>
                  </div>
                  <div class="form-group row">
                  <label>Jabatan</label>
                        <h4 class="form-control" > <?php echo e($show->jabatan); ?> </h4>
                  </div>
                  <div class="form-group row">
                  <label>Unit</label>
                        <h4 class="form-control" > <?php echo e($show->unit); ?> </h4>
                  </div>
                  <div class="form-group row">
                  <label>Tempat Lahir</label>
                         <h4 class="form-control" > <?php echo e($show->tempat_lahir); ?> </h4>
                  </div>
                  <div class="form-group row">
                  <label>Tanggal Lahir</label>
                         <h4 class="form-control" > <?php echo e($show->tanggal_lahir); ?> </h4>
                  </div>
                  <div class="form-group row">
                  <label>Telepon</label>
                         <h4 class="form-control" > <?php echo e($show->telepon); ?> </h4>
                  </div>
                  <div class="form-group row">
                  <label>Alamat</label>
                         <h4 class="form-control" > <?php echo e($show->alamat); ?> </h4>
                  </div>
                  <div class="form-group row">
                  <label>Email</label>
                         <h4 class="form-control" > <?php echo e($show->email); ?> </h4>
                  </div>
  </div>
</div>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sicuti/resources/views/layouts/adminpegawaishow.blade.php ENDPATH**/ ?>