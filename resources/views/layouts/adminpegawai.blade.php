@extends('layouts.master')
@section('css')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{'asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'}}">
  <link rel="stylesheet" href="{{'asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'}}">
@endsection
@section('body')
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data Pegawai</h3>

                <a href="{{route('adminpegawai.create')}}" role="button" class="btn btn-outline-primary float-right col-md-1" >Tambah</a>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                  @if(Session::has('alert-success'))

                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
                <br>
            @endif
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
                  @foreach($pegawai as $p)
                  <tr>
                  <td class style="width: 15%">{{$p->nip}}</td>
                  <td class style="width: 21%">{{$p->nama}}</td>
                  <td>{{$p->unit}}</td>
                  <td class style="width: 15%">{{$p->jabatan}}</td>
                  <td>{{$p->telepon}}</td>
                  <td>
                    <form action="{{route('adminpegawai.destroy',$p->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <span class="table-information"><a href="{{route('admin.riwayat',$p->id)}}" class="btn btn-warning edit-data" style="color: white"  data-id="{{$p->id}}">
                            <i class="fa fa-history"></i>
                    </a></span>
                    <span class="table-information"><a href="{{route('adminpegawai.show',$p->id)}}"  class="btn btn-primary info-data"  data-id="{{$p->id}}">
                            <i class="fa fa-info-circle"></i>
                    </a></span>
                    <span class="table-information"><a href="{{route('adminpegawai.edit',$p->id)}}" class="btn btn-success edit-data"  data-id="{{$p->id}}">
                            <i class="fa fa-edit"></i>
                    </a></span>
                    <span class="table-information"><button  class="btn btn-danger del-data" onclick="return confirm('Yakin ingin menghapus data?')" data-id="{{$p->id}}">
                        <i class="fa fa-trash"></i>
                    </button></span>
                    </form>
                    </td>
                  </tr>
                  @endforeach

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
@endsection
@section('javascript')
<!-- DataTables -->
<!-- DataTables -->
<script src="{{'asset/plugins/datatables/jquery.dataTables.min.js'}}"></script>
<script src="{{'asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'}}"></script>
<script src="{{'asset/plugins/datatables-responsive/js/dataTables.responsive.min.js'}}"></script>
<script src="{{'asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{'asset/dist/js/demo.js'}}"></script>
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
@endsection
