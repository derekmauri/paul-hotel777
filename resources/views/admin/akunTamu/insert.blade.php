@extends('admin.layouts.default')

@section('judul', 'Tambah Data Akun Tamu')

@section('main')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">- Akun Tamu -</h3>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Form Tambah Data Akun Tamu</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('akunTamu.store') }}" method="POST" enctype="multipart/form-data"
                                    novalidate>
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5>Tamu<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <select name="tamu_id" required class="form-select">
                                                        <option value="">- Pilih Tamu -</option>
                                                        @foreach ($tamu as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nm_tamu }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Email <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" id="email" class="form-control"
                                                        required data-validation-required-message="Tidak boleh kosong">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Password <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="text" name="password" id="password"
                                                        class="form-control" required
                                                        data-validation-required-message="Tidak boleh kosong">
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
