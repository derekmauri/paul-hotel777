@extends('admin.layouts.default')

@section('judul', 'Edit Data Booking')

@section('main')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">- Booking Kamar -</h3>
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
                        <h4 class="box-title">Form Edit Data Booking Kamar</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('booking.update', $booking->id) }}" method="POST"
                                    enctype="multipart/form-data" novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5>Tipe Kamar<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <select name="tipe_id" id="tipe_id" required class="form-select">
                                                        <option value="">- Pilih Tipe Kamar -</option>
                                                        @foreach ($tipe as $item)
                                                            <option @if ($item->id == $booking->tipe_id) selected @endif
                                                                data-harga="{{ $item->harga }}"
                                                                value="{{ $item->id }}">{{ $item->tipe_kamar }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span id="harga_id"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Tamu<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <select name="tamu_id" required class="form-select">
                                                        <option value="">- Pilih Tamu -</option>
                                                        @foreach ($tamu as $item)
                                                            <option @if ($item->id == $booking->tamu_id) selected @endif
                                                                value="{{ $item->id }}">{{ $item->nm_tamu }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Tgl. Check-in <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="date" name="checkin" id="checkin"
                                                        value="{{ $booking->checkin }}" class="form-control" required
                                                        data-validation-required-message="Tidak boleh kosong">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Lama <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="number" value="{{ $booking->lama }}" name="lama"
                                                        id="lama" class="form-control" required
                                                        data-validation-required-message="Tidak boleh kosong">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Total Bayar <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <span id="total_rupiah"></span>
                                                    <input type="hidden" readonly name="total_bayar" id="total_bayar"
                                                        class="form-control" required value="{{ $booking->total_bayar }}"
                                                        data-validation-required-message="Tidak boleh kosong">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Ket <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="text" name="ket" id="ket"
                                                        value="{{ $booking->ket }}" class="form-control">
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

@section('script')
    <script src="{{ asset('js/booking.js') }}"></script>
@endsection
