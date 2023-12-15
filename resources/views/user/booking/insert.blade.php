@extends('user.layouts.default')

@section('judul', 'Tambah Data Booking Kamar')

@section('main')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">- Booking Kamar -</h3>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Form Tambah Data Booking Kamar</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('user-booking.store') }}" method="POST"
                                    enctype="multipart/form-data" novalidate>
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            {{-- <div class="form-group">
                                                <h5>Tipe Kamar<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <select name="tipe_id" id="tipe_id" required class="form-select">
                                                        <option value="">- Pilih Tipe Kamar -</option>
                                                        @foreach ($tipe as $item)
                                                            <option value="{{ $item->id }}"
                                                                data-harga="{{ $item->harga }}">{{ $item->tipe_kamar }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <span id="harga_id"></span>
                                                </div>
                                            </div> --}}

                                            <div class="form-group">
                                                <h5>Tipe Kamar<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <select name="daftar_kamar_id" id="daftar_kamar_id" required class="form-select">
                                                        <option value="">- Pilih Nomor Kamar -</option>
                                                        @foreach ($daftarKamar as $item)
                                                            <option value="{{ $item->id }}"
                                                                data-harga="{{ $item->tipe->harga }}">{{ $item->no_kamar }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <span id="harga_id"></span>
                                                </div>
                                            </div>



                                            {{-- <div class="form-group d-none">
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
                                            </div> --}}
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
                                                <h5>Tgl. Check-in <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="date" name="checkin" id="checkin" class="form-control"
                                                        required data-validation-required-message="Tidak boleh kosong">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Lama <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="number" value="1" name="lama" id="lama"
                                                        class="form-control" required
                                                        data-validation-required-message="Tidak boleh kosong">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Total Bayar <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <span id="total_rupiah"></span>
                                                    <input type="hidden" readonly name="total_bayar" id="total_bayar"
                                                        class="form-control" required
                                                        data-validation-required-message="Tidak boleh kosong">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Ket <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="text" name="ket" id="ket"
                                                        class="form-control">
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
