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
                <h3 class="card-title">Tambah Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo e(route('adminpegawai.store')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="card-body">
                  <div class="form-group row">
                  <label>NIP</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="18" name="nip" class="form-control" placeholder="Masukkan NIP">
                  </div>
                  <div class="form-group row">
                  <label>Nama</label>
                        <input type="text" input type="text" onkeypress="return /[a-z., ]/i.test(event.key)" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                  </div>
                  <div class="form-group row">
                  <label>Password</label>
                        <input type="text" name="password" minlength="8" class="form-control" placeholder="Masukkan Password" required>
                  </div>
                  <div class="form-group row">
                  <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Jabatan" required>
                  </div>
                  <div class="form-group row">
                  <label>Unit</label>
                        <input type="text" name="unit" class="form-control" placeholder="Masukkan Unit" required>
                  </div>
                  <div class="form-group row">
                  <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group row">
                  <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <div class="form-group row">
                  <label>Telepon</label>
                        <input type="text"  name="telepon" class="form-control" placeholder="Masukkan Telepon">
                  </div>
                  <div class="form-group row">
                  <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                  </div>
                  <div class="form-group row">
                  <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                  </div>
                  <button type="submit" class="btn btn-default float-right">Simpan</button>
              </form>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sicuti/resources/views/layouts/adminpegawaitambah.blade.php ENDPATH**/ ?>