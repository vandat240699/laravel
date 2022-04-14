<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
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
        <div class="product-top">
            @yield('product-top')
        </div>
        <!-- end product-top -->
        <div class="product-km">
            @yield('product-km')
        </div>
        <!-- end product-other -->
                
        <div class="product-pkk">
            @yield('product-pkk')
        </div>
        <!-- end banner-sale -->
        <div class="product-sale">
            @yield('product-sale')
        </div>
        <!-- end product-sale -->
    </div>
    @include('layouts.footer')
</body>
</html>