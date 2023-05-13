
@include('pimpinan.layouts.head')


<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>


@include('pimpinan.layouts.header')

@include('pimpinan.layouts.sidebar')

@yield('main')

@include('pimpinan.layouts.footer')

    </div>    

@include('pimpinan.layouts.script')

</body>
</html>
