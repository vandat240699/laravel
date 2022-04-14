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
    @include('layouts.head')
</head>
<body id="page-top">
    @include('sweetalert::alert')
    <div id="wrapper">
        @include('admin/layoutAdmin.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin/layoutAdmin.topbar')
                <div class="container-fluid">
                    <div id="login-form-popup" class="lightbox-content">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="account-container lightbox-inner">
                            <div class="col2-set row row-divided row-large" id="customer_login">
                                <div class="col-1 large-6 col pb-0">
                                </div>
                                <div class="col-2 large-12 col pb-0">
                                    <div class="account-register-inner">
                                        <h3 class="uppercase">Đăng ký</h3>
                                        <form method="post" class="woocommerce-form woocommerce-form-register register">
                                            @csrf
                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="reg_email">Họ và tên&nbsp;<span class="required">*</span></label>
                                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="reg_email" autocomplete="email" value="">
                                            </p>
                                            @error('name')
                                                <div class="alert alert-danger">Bạn cần nhập họ tên</div>
                                            @enderror
                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="reg_email">Địa chỉ email&nbsp;<span class="required">*</span></label>
                                                <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="">
                                            </p>
                                            @error('email')
                                                <div class="alert alert-danger">Email không hợp lệ hoặc đã tồn tại</div>
                                            @enderror
                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="reg_password">Mật khẩu&nbsp;<span class="required">*</span></label>
                                                <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password">
                                            </p>
                                            @error('password')
                                                <div class="alert alert-danger">Bạn cần nhập password</div>
                                            @enderror
                                            <div class="woocommerce-privacy-policy-text"></div>
                                            <p class="woocommerce-FormRow form-row">
                                                <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="8a5361920b">
                                                <input type="hidden" name="_wp_http_referer" value="/converse/">
                                                <button type="submit" class="woocommerce-Button button" name="register" value="Đăng ký">Đăng ký</button>
                                            </p>
                                        </form>
                                    </div><!-- .register-inner -->
                                </div><!-- .large-6 -->
                            </div> <!-- .row -->
                        </div><!-- .account-login-container -->
                    </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">ạlfdafkakfjl</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
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