@extends('admin.layouts.default')

@section('judul', 'Edit Data Tipe')

@section('main')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">- Tipe Kamar -</h3>
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
                        <h4 class="box-title">Form Edit Data Tipe Kamar</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('tipe.update', $tipe->id) }}" method="POST"
                                    enctype="multipart/form-data" novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5>Tipe Kamar <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="text" name="tipe_kamar" id="tipe_kamar"
                                                        value="{{ $tipe->tipe_kamar }}" class="form-control" required
                                                        data-validation-required-message="Tidak boleh kosong">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Harga <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="text" name="harga" id="rupiahInput"
                                                        oninput="formatRupiah()" onkeydown="hapusBukanAngka(event)"
                                                        value="{{ $tipe->harga }}" class="form-control" required
                                                        data-validation-required-message="Tidak boleh kosong">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Foto Kamar<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="file" name="foto_kamar" id="foto"
                                                        value="{{ $tipe->foto_kamar }}" class="form-control">
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
