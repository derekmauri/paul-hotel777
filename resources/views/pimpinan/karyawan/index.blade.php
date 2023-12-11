@extends('pimpinan.layouts.default')

@section('judul','Laporan Karyawan')

@section('main')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Laporan Data Karyawan -</h3>
              </div>             
          </div>
      </div>
   
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Name Karyawan</th>
                              <th>Tempat Lahir</th>
                              <th>Tanggal Lahir</th>
                              <th>Jenis Kelamin</th>
                              <th>Status Pekerjaan</th>
                              <th>No Telepon</th>
                              <th>Alamat</th>
                              <th>Foto</th>                         
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($karyawan as $item )
                            <tr>
                                <td align="center">{{$loop->iteration}}</td>
                                <td>{{$item->nm_karyawan}}</td>
                                <td>{{$item->tempat}}</td>
                                <td>{{$item->tgl_lahir}}</td>
                                <td>{{$item->jenkel}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->no_telepon}}</td>
                                <td>{{$item->alamat}}</td>
                          
                                <td>  <a href="{{asset('storage/karyawan/' .$item->foto)}}" data-gallery="multiimages" title="Foto Karyawan"><img src="{{asset('storage/karyawan/' .$item->foto)}}" class="all studio" style="width: 100px; height:100px; " alt="gallery" /></a></td>
                                
                            </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>No</th>
                            <th>Nama Karyawa</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Status Pekerjaan</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                     
                          </tr>
                      </tfoot>
                  </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->

    </div>
</div>
<!-- /.content-wrapper -->


@endsection
