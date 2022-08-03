<?php $__env->startSection('body'); ?>
<div class="alert alert-info" role="alert">
        Selamat Datang di Halaman Sistem Informasi Cuti
</div>
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e($pegawai); ?></h3>

                <p>Data Pegawai</p>
              </div>
              <div class="icon">
                <i class="fas fa-child"></i>
              </div>
              <a href="/adminpegawai" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo e($cuti); ?></h3>

                <p>Data Permohonan</p>
              </div>
              <div class="icon">
                <i class="fas fa-paper-plane"></i>
              </div>
              <a href="/adminpermohonan" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sicuti/resources/views/layouts/admindashboard.blade.php ENDPATH**/ ?>