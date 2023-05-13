@extends('admin.layouts.default')

@section('judul','Tambah Data Karyawan')

@section('main')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Data Karyawan -</h3>
              </div>

          </div>
      </div>

      	<!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Form Tambah Data Karyawan</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form action="{{ route('karyawan.store')}}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                         <div class="row">
                           <div class="col-12">
                               <div class="form-group">
                                   <h5>Nama Karyawan <span class="text-danger"></span></h5>
                                   <div class="controls">
                                       <input type="text" name="nm_karyawan" id="nm_karyawan" class="form-control" required data-validation-required-message="Tidak boleh kosong">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <h5>Tempat Lahir <span class="text-danger"></span></h5>
                                   <div class="controls">
                                       <input type="text" name="tempat" id="tempat" class="form-control" required data-validation-required-message="Tidak boleh kosong">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <h5>Tanggal Lahir <span class="text-danger"></span></h5>
                                   <div class="controls">
                                       <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required data-validation-required-message="Tidak boleh kosong">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <h5>No Telepon <span class="text-danger"></span></h5>
                                   <div class="controls">
                                       <input type="text" name="no_telepon" id="no_telepon" class="form-control" required data-validation-required-message="Tidak boleh kosong">
                                   </div>
                               </div>
                           </div>
                         </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Jenis Kelamin <span class="text-danger"></span></h5>
                                    <fieldset class="controls">
                                        <input name="jenkel" type="radio" id="pria" value="Pria" required>
                                        <label for="pria">Pria</label>
                                    </fieldset>
                                    <fieldset>
                                        <input name="jenkel" type="radio" id="wanita" value="Wanita">
                                        <label for="wanita">Wanita</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Status Pekerjaan<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <select name="status" id="status" required class="form-select">
                                            <option value="">- Pilih Status Pekerjaan -</option>
                                            <option value="Keamanan">Keamanan</option>
                                            <option value="Resepsyonis">Resepsyonis</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Foto <span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="file" name="foto" id="foto" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <h5>Alamat <span class="text-danger"></span></h5>
                                <div class="controls">
                                    <textarea name="alamat" id="alamat" class="form-control" required placeholder="Masukan Alamat"></textarea>
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

