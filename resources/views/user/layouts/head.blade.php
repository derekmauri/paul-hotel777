<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/hotel3.jpeg">

    <title>@yield('judul')</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('asset_user/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('asset_user/css/horizontal-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/skin_color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}">

    {{-- <link rel="stylesheet" href="{{ asset('css/Home.css') }}"> --}}
    @yield('style')
    
</head>
