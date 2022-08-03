<html >
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>
    <h3 style="text-align: center;">Laporan Cuti Pegawai</h3>
    <h3 style="text-align: center;">Fakultas Ekonomi dan Bisnis</h3>
    <h3 style="text-align: center;">Universitas Bengkulu</h3>
    <hr />
    <h3 style="text-align: center;">&nbsp;</h3>
    <table class="table table-bordered">
    <tbody>
    <tr style="height: 44.453125px;">
    <td style="width: 140.828125px; height: 44.453125px; text-align: center;">Tanggal Pengajuan</td>
    <td style="width: 132.34375px; height: 44.453125px; text-align: center;">NIP</td>
    <td style="width: 135.15625px; height: 44.453125px; text-align: center;">Nama&nbsp;</td>
    <td style="width: 134.421875px; height: 44.453125px; text-align: center;">Mulai</td>
    <td style="width: 138.328125px; height: 44.453125px; text-align: center;">Berakhir&nbsp;</td>
    <td style="width: 134.046875px; height: 44.453125px; text-align: center;">Jenis</td>
    <td style="width: 135.90625px; height: 44.453125px; text-align: center;">Status</td>
    </tr>
    @foreach ($pegawai as $data)
                      <?php
                      foreach ($data->cuti as $cuti) {
                          # code...
                          if(isset($cuti->mulai_cuti)){
                      }
                      ?>
                      <tr class="justify-content-center">
                          {{-- @foreach ($data->cuti as $cuti) --}}


                          <td class="text-center" style="width: 10%;">{{$cuti->created_at->format('d - m - yy')}}</td>
                          {{-- @endforeach --}}
                          <td>{{$data->nip}}</td>
                          <td style="width: 20%;">{{$data->nama}}</td>
                          {{-- @foreach ($data->cuti as $cuti) --}}


                          <td style="width: 10%;">{{$cuti->mulai_cuti->format('d - m - yy')}}</td>
                          <td style="width: 10%;">{{$cuti->akhir_cuti->format('d - m - yy')}}</td>
                          <td style="text-transform: capitalize;">{{$cuti->jenis_cuti}}</td>
                          <?php
                      if ($cuti->status=='belum') {
                          # code...
                          echo '<td ">
                            Belum Diverifikasi
                            </td>';
                        }
                        if ($cuti->status=='disetujui') {
                            # code...
                            echo '<td ">
                                Disetujui
                                </td>';
                            }
                            if ($cuti->status=='gagal') {
                                # code...
                                echo '<td ">
                                    Tidak Disetujui
                                    </td>';
                                }
                                ?>
                        {{-- @endforeach --}}
                    </tr>
                <?php }?>
                    @endforeach
    </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    window.print();
  </script>
</body>
</html>
