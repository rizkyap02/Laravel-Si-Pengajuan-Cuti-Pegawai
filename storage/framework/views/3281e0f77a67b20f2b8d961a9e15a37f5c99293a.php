<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo e('asset/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo e('asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo e('asset/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e('asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e('asset/plugins/select2/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo e('asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo e('asset/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css'); ?>">
<?php $__env->startSection('body'); ?>

<div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Permohonan Cuti</h3>
              </div>
              <div class="card-body">
              <?php if(Session::has('alert-success')): ?>

                  <div class="alert alert-success">
                      <strong><?php echo e(\Illuminate\Support\Facades\Session::get('alert-success')); ?></strong>
                  </div>
                  <br>
              <?php endif; ?>
                <!-- Date -->
                <form action="<?php echo e(route('pegawai.tambahpermohonan')); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                <div class="form-group">
                  <label>Mulai Tanggal</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" class="form-control datetimepicker-input" name="mulaicuti" >
                    </div>
                </div>
                <div class="form-group">
                  <label>Berakhir Tanggal</label>
                    <div class="input-group date" id="enddate" data-target-input="nearest">
                        <input type="date" class="form-control datetimepicker-input" name='akhircuti'>
                    </div>
                </div>
                <div class="form-group">
                        <label>Jenis Cuti</label>
                        <select class="form-control" name="jeniscuti">
                          <option value="tahunan">Cuti Tahunan</option>
                          <option value="besar">Cuti Besar</option>
                          <option value="sakit">Cuti Sakit</option>
                          <option value="melahirkan">Cuti Melahirkan</option>
                          <option value="alasan_penting">Cuti Karena Alasan Penting</option>
                          <option value="diluar_tanggungan">Cuti di Luar Tanggungan Negara</option>
                        </select>
                </div>
                <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-default float-right">Ajukan</button>

            </div>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script src="<?php echo e('asset/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?php echo e('asset/plugins/select2/js/select2.full.min.js'); ?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo e('asset/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js'); ?>"></script>
<!-- InputMask -->
<script src="<?php echo e('asset/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?php echo e('asset/plugins/inputmask/min/jquery.inputmask.bundle.min.js'); ?>"></script>
<!-- date-range-picker -->
<script src="<?php echo e('asset/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo e('asset/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e('asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo e('asset/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>"></script>
<script src="<?php echo e('asset/dist/js/demo.js'); ?>"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'YYYY/MM/DD'
    });
    $('#enddate').datetimepicker({
        format: 'YYYY/MM/DD'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'DD/MM/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('DDDD M, YYYY') + ' - ' + end.format('DDDD M, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.masterpegawai', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sicuti/resources/views/layouts/pegawaipermohonan.blade.php ENDPATH**/ ?>