@extends('user.layouts.default')

@section('judul', 'Data Tipe')

@section('main')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">- Tipe Kamar -</h3>
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
                                                <th>Tipe Kamar</th>
                                                <th>Harga</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tipe as $item)
                                                <tr>
                                                    <td align="center">{{ $loop->iteration }}</td>
                                                    <td>{{ $item->tipe_kamar }}</td>
                                                    <td>@rupiah($item->harga)</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Tipe Kamar</th>
                                                <th>Harga</th>

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
