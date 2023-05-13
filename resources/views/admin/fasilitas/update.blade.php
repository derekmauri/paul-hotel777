@extends('admin.layouts.default')

@section('judul','Edit Data Fasilitas')

@section('main')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Fasilitas Kamar  -</h3>
                  <div class="d-inline-block align-items-center">
                  </div>
              </div>

          </div>
      </div>

      	<!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Form Edit Data Fasilitas Kamar</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form action="{{ route('fasilitas.update', $fasilitas->id)}}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('PUT')
                         <div class="row">
                           <div class="col-12">
                            <div class="form-group">
                                <h5>Tipe Kamar<span class="text-danger"></span></h5>
                                <div class="controls">
                                    <select name="tipe_id" required class="form-select">
                                        <option value="">- Pilih Tipe Kamar -</option>
                                       @foreach ($tipe as $item )
                                       <option @if ($item->id == $fasilitas->tipe_id)
                                           selected
                                       @endif  value="{{$item->id}}">{{$item->tipe_kamar}}</option>                                       
                                       @endforeach                                        
                                    </select>
                                </div>
                            </div>
                               <div class="form-group">
                                   <h5>Fasilitas <span class="text-danger"></span></h5>
                                   <div class="controls">
                                       <input type="text" name="nm_fasilitas" id="nm_fasilitas" value="{{$fasilitas->nm_fasilitas}}" class="form-control" required data-validation-required-message="Tidak boleh kosong">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <h5>Jumlah <span class="text-danger"></span></h5>
                                   <div class="controls">
                                       <input type="text" name="jumlah" id="jumlah" value="{{$fasilitas->jumlah}}" class="form-control" required data-validation-required-message="Tidak boleh kosong">
                                   </div>
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

