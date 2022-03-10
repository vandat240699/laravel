<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.style')
</head>
<body>
    @include('layouts.header')
    @include('layouts.menu')
    <div class="container">
        <div class="banner">
            @yield('banner')
        </div>
        <!-- end banner -->
        <div class="product-sample">
            @yield('product-sample')
        </div>
        <!-- end product-sample -->
        <div class="product-top"></div>
        <!-- end product-top -->
        <div class="product-other"></div>
        <!-- end product-other -->
        <div class="banner-sale"></div>
        <!-- end banner-sale -->
        <div class="product-sale"></div>
        <!-- end product-sale -->
    </div>
    @include('layouts.footer')
</body>
</html>