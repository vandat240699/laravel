<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @include('layouts.style')
</head>
<body>
    @include('layouts.header')
    <div id="login-form-popup" class="lightbox-content">
		<div class="woocommerce-notices-wrapper"></div>
		<div class="account-container lightbox-inner">
			<div class="col2-set row row-divided row-large" id="customer_login">
				<div class="col-1 large-6 col pb-0">
					<div class="account-login-inner">
						<h3 class="uppercase">Đăng nhập</h3>
						<form class="woocommerce-form woocommerce-form-login login" method="post">
							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="username">Tên tài khoản hoặc địa chỉ email&nbsp;<span class="required">*</span></label>
								<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="">
							</p>
							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
								<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password">
							</p>
							<p class="form-row">
								<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="84cfe145c5"><input type="hidden" name="_wp_http_referer" value="/converse/"> <button type="submit" class="woocommerce-Button button" name="login" value="Đăng nhập">Đăng nhập</button>
								<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
									<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Ghi
										nhớ mật khẩu</span>
								</label>
							</p>
							<p class="woocommerce-LostPassword lost_password">
								<a href="http://mauweb.monamedia.net/converse/tai-khoan/lost-password/">Quên mật
									khẩu?</a>
							</p>
						</form>
					</div><!-- .login-inner -->
				</div>
				<div class="col-2 large-6 col pb-0">
					<div class="account-register-inner">
						<h3 class="uppercase">Đăng ký</h3>
						<form method="post" class="woocommerce-form woocommerce-form-register register">
                            @csrf
                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="reg_email">Họ và tên&nbsp;<span class="required">*</span></label>
								<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="reg_email" autocomplete="email" value="">
							</p>
							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="reg_email">Địa chỉ email&nbsp;<span class="required">*</span></label>
								<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="">
							</p>
							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="reg_password">Mật khẩu&nbsp;<span class="required">*</span></label>
								<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password">
							</p>
							<div class="woocommerce-privacy-policy-text"></div>
							<p class="woocommerce-FormRow form-row">
								<input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="8a5361920b"><input type="hidden" name="_wp_http_referer" value="/converse/"> <button type="submit" class="woocommerce-Button button" name="register" value="Đăng ký">Đăng ký</button>
							</p>
						</form>
					</div><!-- .register-inner -->
				</div><!-- .large-6 -->
			</div> <!-- .row -->
		</div><!-- .account-login-container -->
	</div>
    @include('layouts.footer')
</body>
</html>