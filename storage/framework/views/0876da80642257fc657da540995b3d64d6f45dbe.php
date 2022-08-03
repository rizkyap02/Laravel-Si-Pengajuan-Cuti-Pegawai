<?php $__env->startSection('css'); ?>
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo e('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="alert alert-info mt-3" role="alert">
        Selamat Datang di Halaman Sistem Informasi Cuti
</div>

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

<?php echo $__env->make('layouts.masterpegawai', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sicuti/resources/views/layouts/pegawaidashboard.blade.php ENDPATH**/ ?>