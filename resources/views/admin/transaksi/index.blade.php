@extends('admin.layouts.default')

@section('judul', 'Transaksi')

@section('main')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">- Transaksi -</h3>
                    </div>

                    <div class="clearfix">
                        <a href="{{ route('tipe.create') }}"><button type="button"
                                class="waves-effect waves-light btn btn-outline btn-primary-light mb-5">Tambah
                                Data</button></a>
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

@section('script')
    <script src="{{ asset('js/transaksi.js') }}"></script>
@endsection
