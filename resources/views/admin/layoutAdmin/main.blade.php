<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @include('layouts.style')
    @include('admin/layoutAdmin.jss')
    <title>@yield('title')</title>
    <link href="{{asset("vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
    @include('sweetalert::alert')
    <div id="wrapper">
        @include('admin/layoutAdmin.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin/layoutAdmin.topbar')
                <div class="container-fluid">
                    @yield('chart')
                </div>
            </div>
            @include("admin/layoutAdmin.footer")
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">Bạn có muốn dăng xuất không?</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/admin/login">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("vendor/jquery-easing/jquery.easing.min.js")}}"></script>
    <script src="{{asset("js/sb-admin-2.min.js")}}"></script>
    <script src="{{asset("vendor/chart.js/Chart.min.js")}}"></script>
    <script src="{{asset("js/demo/chart-area-demo.js")}}"></script>
    <script src="{{asset("js/demo/chart-pie-demo.js")}}"></script>
</body>

</html>