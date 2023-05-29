<!-- Left side column. contains the logo and sidebar -->
<nav class="main-nav" role="navigation">

    <!-- Mobile menu toggle button (hamburger/x icon) -->
    <input id="main-menu-state" type="checkbox" />
    <label class="main-menu-btn" for="main-menu-state">
        <span class="main-menu-btn-icon"></span> Toggle main menu visibility
    </label>

    <!-- Sample menu definition -->
    <ul id="main-menu" class="sm sm-blue">
        <li><a href="{{ route('tamu') }}"><i class="fa fa-home"><span class="path1"></span><span
                        class="path2"></span></i>DASHBOARD</a></li>
        <li><a href="{{ route('profil.index') }}"><i class="fa fa-cog"><span class="path1"></span><span
                        class="path2"></span></i>PROFIL KAMI</a></li>

        @role('tamu')
            <li><a href="{{ route('user-booking.index') }}"><i class="fa fa-tasks"><span class="path1"></span><span
                            class="path2"></span></i>BOOKING</a></li>
        @endrole

        <li><a href="{{ route('galeriUser.index') }}"><i class="fa fa-photo"><span class="path1"></span><span
                        class="path2"></span></i>GALERI FOTO</a></li>
        <li><a href="{{ route('kontak.index') }}"><i class="fa fa-phone-square"><span class="path1"></span><span
                        class="path2"></span></i>KONTAK KAMI</a></li>
        @auth
        @else
            <li><a href="/login"><i class="fa  fa-sign-in"><span class="path1"></span><span
                            class="path2"></span></i>LOGIN</a></li>
        @endauth

    </ul>
</nav>

<!-- Content Wrapper. Contains page content -->
