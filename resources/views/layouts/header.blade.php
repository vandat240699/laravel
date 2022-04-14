@include('layouts.head')
<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="masthead" class="header-main show-logo-center nav-dark">
            <div class="header-inner flex-row container logo-center medium-logo-center" role="navigation">
                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="/" title="Converse" rel="home">
                        <img width="200" height="80" src="http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/logo-mona.png" class="header_logo header-logo" alt="Converse"><img width="200" height="80" src="http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/logo-mona.png" class="header-logo-dark" alt="Converse"></a>
                </div>
                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-controls="main-menu" aria-expanded="false">

                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="header-nav header-nav-main nav nav-left  nav-uppercase">
                        <li class="account-item has-icon">
                            <a href="/login" class="nav-top-link nav-top-not-logged-in is-small" data-open="#login-form-popup">
                                <span>
                                    Đăng nhập / Đăng ký </span>
                            </a><!-- .account-login-link -->
                        </li>
                    </ul>
                </div>
                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                        <li class="header-divider"></li>
                        <li class="cart-item has-icon has-dropdown">
                            <a href="" title="Giỏ hàng" class="header-cart-link is-small">
                                <span class="header-cart-title">
                                    Giỏ hàng / <span class="cart-price"><span class="woocommerce-Price-amount amount">0&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                </span>
                                <span class="cart-icon image-icon">
                                    <strong>0</strong>
                                </span>
                            </a>
                        </li>
                        <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                            <a href="/admin/login" class="is-small">
                                <img style="width: 50px;" src="{{asset("Image/admin.jpg")}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="cart-item has-icon">

                            <a href="http://mauweb.monamedia.net/converse/gio-hang/" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">

                                <span class="cart-icon image-icon">
                                    <strong>0</strong>
                                </span>
                            </a>


                            <!-- Cart Sidebar Popup -->
                            <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                                <div class="cart-popup-inner inner-padding">
                                    <div class="cart-popup-title text-center">
                                        <h4 class="uppercase">Giỏ hàng</h4>
                                        <div class="is-divider"></div>
                                    </div>
                                    <div class="widget_shopping_cart_content">


                                        <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong
                                            giỏ hàng.</p>


                                    </div>
                                    <div class="cart-sidebar-content relative"></div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

            </div><!-- .header-inner -->

            <!-- Header divider -->
            <div class="container">
                <div class="top-divider full-width"></div>
            </div>
        </div><!-- .header-main -->
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div><!-- .header-bg-container -->
    </div><!-- header-wrapper-->
</header>