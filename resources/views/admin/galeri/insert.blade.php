@extends('admin.layouts.default')

@section('judul','Tambah Data Galeri')

@section('main')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Galeri -</h3>
              </div>
          </div>
      </div>

      	<!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Form Tambah Galeri</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form action="{{ route('galeri.store')}}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                         <div class="row">
                           <div class="col-12">
                            <div class="form-group">
                                <h5>Foto <span class="text-danger"></span></h5>
                                <div class="controls">
                                    <input type="file" name="foto" id="foto" class="form-control" required>
                                </div>
                            </div>                              
                        </div>
                        </div>
                           <div class="text-xs-right">
                               <button type="submit" class="btn btn-info">Submit</button>
                           </div>
                       </form>

                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->

           </section>
           <!-- /.content -->

    </div>
</div>
<!-- /.content-wrapper -->

@endsection

