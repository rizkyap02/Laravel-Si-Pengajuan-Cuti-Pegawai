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
                <h3 class="card-title">Data Pegawai</h3>

                <a href="<?php echo e(route('adminpegawai.create')); ?>" role="button" class="btn btn-outline-primary float-right col-md-1" >Tambah</a>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                  <?php if(Session::has('alert-success')): ?>

                <div class="alert alert-success">
                    <strong><?php echo e(\Illuminate\Support\Facades\Session::get('alert-success')); ?></strong>
                </div>
                <br>
            <?php endif; ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Unit</th>
                    <th>Jabatan</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                  <td class style="width: 15%"><?php echo e($p->nip); ?></td>
                  <td class style="width: 21%"><?php echo e($p->nama); ?></td>
                  <td><?php echo e($p->unit); ?></td>
                  <td class style="width: 15%"><?php echo e($p->jabatan); ?></td>
                  <td><?php echo e($p->telepon); ?></td>
                  <td>
                    <form action="<?php echo e(route('adminpegawai.destroy',$p->id)); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <span class="table-information"><a href="<?php echo e(route('admin.riwayat',$p->id)); ?>" class="btn btn-warning edit-data" style="color: white"  data-id="<?php echo e($p->id); ?>">
                            <i class="fa fa-history"></i>
                    </a></span>
                    <span class="table-information"><a href="<?php echo e(route('adminpegawai.show',$p->id)); ?>"  class="btn btn-primary info-data"  data-id="<?php echo e($p->id); ?>">
                            <i class="fa fa-info-circle"></i>
                    </a></span>
                    <span class="table-information"><a href="<?php echo e(route('adminpegawai.edit',$p->id)); ?>" class="btn btn-success edit-data"  data-id="<?php echo e($p->id); ?>">
                            <i class="fa fa-edit"></i>
                    </a></span>
                    <span class="table-information"><button  class="btn btn-danger del-data" onclick="return confirm('Yakin ingin menghapus data?')" data-id="<?php echo e($p->id); ?>">
                        <i class="fa fa-trash"></i>
                    </button></span>
                    </form>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sicuti/resources/views/layouts/adminpegawai.blade.php ENDPATH**/ ?>