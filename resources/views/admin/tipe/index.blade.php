@extends('admin.layouts.default')

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

                    <div class="clearfix">
                        <a href="{{ route('tipe.create') }}"><button type="button"
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
                                                <th>Tipe Kamar</th>
                                                <th>Harga</th>
                                                <th>Foto Kamar</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tipe as $item)
                                                <tr>
                                                    <td align="center">{{ $loop->iteration }}</td>
                                                    <td>{{ $item->tipe_kamar }}</td>
                                                    <td>@rupiah($item->harga)</td>
                                                    <td> <a href="{{ asset('storage/foto_kamar/' . $item->foto_kamar) }}"
                                                            data-gallery="multiimages" title="Foto Kamar"><img
                                                                src="{{ asset('storage/foto_kamar/' . $item->foto_kamar) }}"
                                                                class="all studio" alt="gallery" width="100px" /></a></td>

                                                    <td align="center">
                                                        <a href="{{ route('tipe.edit', $item->id) }}"><button type="submit"
                                                                class="waves-effect waves-light btn btn-outline btn-success mb-5"><i
                                                                    class="fa fa-edit (alias)"></i> Edit</button></a>
                                                        <form action="{{ route('tipe.destroy', $item->id) }}" method="post"
                                                            id="formHapus" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="waves-effect waves-light btn btn-outline btn-danger mb-5"
                                                                onclick="return confirm('Anda Yakin Menghapus Data Ini? ')"><i
                                                                    class="fa fa-trash-o"></i> Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Tipe Kamar</th>
                                                <th>Harga</th>
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


    <form action="" method="post" id="formHapus">
        @csrf
        @method('DELETE')
    </form>

@endsection

@section('script')
    <script>
        $('.btn-hapus').click(function(e) {
            e.preventDefault();
            let href = $(this).attr('href')
            swal({
                title: "Yakin Menghapus Data Ini?",
                text: "Data Akan Terhapus Permanent!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yakin!",
                cancelButtonText: "Batal",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    document.getElementById('formHapus').action = href
                    document.getElementById('formHapus').submit();
                }
            });
        });
    </script>

@endsection
