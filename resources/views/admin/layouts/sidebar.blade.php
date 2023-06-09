<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Dashboard & Apps</li>
                    <li>
                        <a href="{{ route('admin') }}"><i class="fa fa-dashboard"><span class="path1"></span><span
                                    class="path2"></span></i><span>DASHBOARD</span></a>
                    </li>
                    <li>
                        <a href="{{ route('karyawan.index') }}"><i class="fa fa-user-circle-o"><span
                                    class="path1"></span><span class="path2"></span></i><span>KARYAWAN</span></a>
                    </li>

                    <li>
                        <a href="{{ route('tipe.index') }}"><i class="fa fa-quote-left"><span
                                    class="path1"></span><span class="path2"></span></i><span>TIPE
                                KAMAR</span></a>
                    </li>
                    <li>
                        <a href="{{ route('fasilitas.index') }}"><i class="fa fa-wrench"><span
                                    class="path1"></span><span class="path2"></span></i><span>FASILITAS
                                KAMAR</span></a>
                    </li>
                    <li>
                        <a href="{{ route('daftarKamar.index') }}"><i class="fa fa-filter"><span
                                    class="path1"></span><span class="path2"></span></i><span>DAFTAR
                                KAMAR</span></a>
                    </li>
                    <li>
                        <a href="{{ route('galeri.index') }}"><i class="fa fa-camera-retro"><span
                                    class="path1"></span><span class="path2"></span></i><span>GALERI</span></a>
                    </li>
                    <li>
                        <a href="{{ route('tamu.index') }}"><i class="fa fa-hotel (alias)"><span
                                    class="path1"></span><span class="path2"></span></i><span>DAFTAR TAMU</span></a>
                    </li>
                    <li>
                        <a href="{{ route('akunTamu.index') }}"><i class="fa fa-users"></i><span>AKUN
                                TAMU</span></a>
                    </li>
                    <li>
                        <a href="{{ route('booking.index') }}">
                            <i class="fa fa-money"><span class="path1"></span><span
                                    class="path2"></span></i>BOOKING</a>
                    </li>
                    <li>
                        <a href="{{ route('transaksi.index') }}"><i class="fa fa-tasks"><span
                                    class="path1"></span><span class="path2"></span></i>TRANSAKSI</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</aside>
