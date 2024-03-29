@extends('pimpinan.layouts.default')

@section('judul','Laporan Tamu')

@section('main')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Laporan Daftar Tamu -</h3>
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
                    {{-- <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100"> --}}
                        <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>NIK</th>
                              <th>Nama Tamu</th>
                              <th>Tempat Lahir</th>
                              <th>Tanggal Lahir</th>
                              <th>Jenis Kelamin</th>
                              <th>Agama</th>
                              <th>Status Perkawinan</th>                             
                              <th>Alamat</th>
                              <th>Foto</th>
                     
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($tamu as $item )
                            <tr>
                                <td align="center">{{$loop->iteration}}</td>
                                <td>{{$item->nik}}</td>
                                <td>{{$item->nm_tamu}}</td>
                                <td>{{$item->tempat}}</td>
                                <td>{{$item->tgl_lahir}}</td>
                                <td>{{$item->jenkel}}</td>
                                <td>{{$item->agama}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->alamat}}</td>
                                <td><a href="{{asset('storage/tamu/' .$item->foto)}}" data-gallery="multiimages" title="Foto Tamu"><img src="{{asset('storage/tamu/' .$item->foto)}}" class="all studio" style="width: 100px; height:100px; " alt="gallery" /></a></td>
                               
                            </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Tamu</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Status Perkawinan</th>                           
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
