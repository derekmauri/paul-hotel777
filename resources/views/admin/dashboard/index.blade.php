@extends('admin.layouts.default')

@section('judul', 'Dashboard')

@section('main')


    <!-- Main content -->
    <section class="content">

        <!-- Basic Forms -->
        <div class="row">
            <div class="box">
                <div class=" col-12">
                    {{-- <div class="box"> --}}
                        {{-- <div class="card-body d-flex p-50">
                            <div class="flex-grow-1 px-70 pt-100 pb-200 flex-grow-9 bg-img "
                                style=" background-image: url(images/home1.jpeg)">

                                <h1 class="text-white">Welcome To Website</h1>
                                <h1 class="text-white"><b>Hotel 777 Abepura Jayapura</b></h1>

                                @role('tamu')
                                    <a href="{{ route('user-booking.index') }}"
                                        class="btn btn-warning text-dark mt-5">BOOKING</a>
                                @else
                                    <a href="/login" class="btn btn-warning text-dark mt-5">BOOKING</a>
                                @endrole
                            </div>
                        </div> --}}
                    {{-- </div> --}}



                            <div class="gambar"
                                style=" background-image: url(images/HOME.jpg)">

                                <h1>Selamat Datang Di Aplikasi</h1><br>
                                <h1><b>Hotel 777 Abepura Jayapura</b></h1>

                        </div>




                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

@endsection


@section('style')

<style>
    * {
        margin: 0;
        padding: 0;
    }
    .gambar {
      background-repeat: no-repeat;
      /* background-position: center; */
      background-attachment: fixed;
     background-size: cover;
     /* width: 200px; */
     height: 100vh;

    }

    .gambar h1{
        text-align: center;
        font-size: 50px;
        color: rgba(5, 56, 56, 0.986) ;
        /* font-style: initial; */
        position: relative;
        margin: 0;
        padding: 0;
        top: 50%;
        left: 50%;
        transform: translate(-50%) translateY(-50%);

    }

</style>

@endsection
