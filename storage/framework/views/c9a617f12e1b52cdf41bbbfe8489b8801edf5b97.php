<?php $__env->startSection('css'); ?>
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="col-md-12">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Profil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form class="form-horizontal" action="<?php echo e(route('profil.update',$show->id)); ?>" method="post">

                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>

                <div class="card-body">
                    <?php if(Session::has('alert-success')): ?>

                <div class="alert alert-success">
                    <strong><?php echo e(\Illuminate\Support\Facades\Session::get('alert-success')); ?></strong>
                </div>
            <?php endif; ?>
                  <div class="form-group row">
                  <label>NIP</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="18" name="nip" class="form-control" value="<?php echo e($show->nip); ?>" placeholder="Masukkan NIP">
                  </div>
                  <div class="form-group row">
                  <label>Nama</label>
                        <input type="text" input type="text" onkeypress="return /[a-z., ]/i.test(event.key)" name="nama" class="form-control" value="<?php echo e($show->nama); ?>" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group row">
                  <label>Password</label>
                        <input type="password" name="password" minlength="8" class="form-control" value="" placeholder="Masukkan Password">
                        <span class="" style="color: red;">
                            *note : kosongkan jika tidak ingin mengganti password
                        </span>
                  </div>
                  <div class="form-group row">
                  <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="<?php echo e($show->jabatan); ?>" placeholder="Masukkan Jabatan">
                  </div>
                  <div class="form-group row">
                  <label>Unit</label>
                        <input type="text" name="unit" class="form-control" value="<?php echo e($show->unit); ?>" placeholder="Masukkan Unit">
                  </div>
                  <div class="form-group row">
                  <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo e($show->tempat_lahir); ?>" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group row">
                  <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo e($show->tanggal_lahir); ?>" placeholder="Masukkan Tanggal Lahir">
                    </div>
                  <div class="form-group row">
                  <label>Telepon</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" name="telepon" class="form-control" value="<?php echo e($show->telepon); ?>" placeholder="Masukkan Telepon">
                  </div>
                  <div class="form-group row">
                  <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo e($show->alamat); ?>" placeholder="Masukkan Alamat">
                  </div>
                  <div class="form-group row">
                  <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo e($show->email); ?>" placeholder="Masukkan Email">
                  </div>
                  <button type="submit" class="btn btn-default float-right" onclick="return confirm('Yakin ingin mengubah data?')">Edit</button>
              </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.masterpegawai', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sicuti/resources/views/layouts/pegawaiprofil.blade.php ENDPATH**/ ?>