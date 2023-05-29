@extends('user.layouts.default')

@section('judul', 'Data Booking')

@section('main')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">- Kamar yang telah dibooking -</h3>
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
                                                <th>Nama Tamu</th>
                                                <th>Tipe Kamar</th>
                                                <th>Harga</th>
                                                <th>Tgl. Booking</th>
                                                <th>Lama</th>
                                                <th>Total Bayar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($booking as $item)
                                                <tr>
                                                    <td align="center">{{ $loop->iteration }}</td>
                                                    <td>{{ $item->tamu->nm_tamu }}</td>
                                                    <td>{{ $item->tipe->tipe_kamar }}</td>
                                                    <td>{{ $item->tipe->harga }}</td>
                                                    <td>{{ $item->checkin }}</td>
                                                    <td>{{ $item->lama }} hari</td>
                                                    <td>{{ $item->total_bayar }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Tamu</th>
                                                <th>Tipe Kamar</th>
                                                <th>Harga</th>
                                                <th>Tgl. Booking</th>
                                                <th>Lama</th>
                                                <th>Total Bayar</th>
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">- Riwayat booking kamar anda-</h3>
                    </div>

                    <div class="clearfix">
                        <a href="{{ route('booking.create') }}"><button type="button"
                                class="waves-effect waves-light btn btn-outline btn-primary-light mb-5">Tambah
                                Data</button></a>
                    </div>
                </div>
            </div>

            @if (session('berhasil'))
                <div class="box-body pad res-tb-block">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>{{ session('berhasil') }}
                    </div>
                </div>
            @endif

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
                                                <th>Nama Tamu</th>
                                                <th>Tipe Kamar</th>
                                                <th>Harga</th>
                                                <th>Tgl. Booking</th>
                                                <th>Lama</th>
                                                <th>Total Bayar</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($riwayat_booking as $item)
                                                <tr>
                                                    <td align="center">{{ $loop->iteration }}</td>
                                                    <td>{{ $item->tamu->nm_tamu }}</td>
                                                    <td>{{ $item->tipe->tipe_kamar }}</td>
                                                    <td>{{ $item->tipe->harga }}</td>
                                                    <td>{{ $item->checkin }}</td>
                                                    <td>{{ $item->lama }} hari</td>
                                                    <td>{{ $item->total_bayar }}</td>
                                                    <td align="center">
                                                        <a href="{{ route('user-booking.edit', $item->id) }}"><button
                                                                type="submit"
                                                                class="waves-effect waves-light btn btn-outline btn-success mb-5"><i
                                                                    class="fa fa-edit (alias)"></i> Edit</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Tamu</th>
                                                <th>Tipe Kamar</th>
                                                <th>Harga</th>
                                                <th>Tgl. Booking</th>
                                                <th>Lama</th>
                                                <th>Total Bayar</th>
                                                <th>Opsi</th>
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
