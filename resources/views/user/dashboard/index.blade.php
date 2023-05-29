@extends('user.layouts.default')

@section('judul', 'Dashboard')

@section('main')

    <!-- Main content -->
    <section class="content">

        <!-- Basic Forms -->
        <div class="row">
            <div class="box">
                <div class=" col-12">
                    <div class="box">
                        <div class="card-body d-flex p-0">
                            <div class="flex-grow-1 px-70 pt-100 pb-200 flex-grow-1 bg-img "
                                style=" background-image: url(images/hotel1.jpeg)">

                                <h1 class="text-white">Welcome To Website</h1>
                                <h1 class="text-white"><b>Hotel 777 Abepura Jayapura</b></h1>

                                @role('tamu')
                                    <a href="{{ route('user-booking.index') }}"
                                        class="btn btn-warning text-dark mt-5">BOOKING</a>
                                @else
                                    <a href="/login" class="btn btn-warning text-dark mt-5">BOOKING</a>
                                @endrole
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

@endsection
