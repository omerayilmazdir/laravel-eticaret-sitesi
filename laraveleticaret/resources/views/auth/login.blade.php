<x-guest-layout>
	<main id="main" class="main-site left-sidebar">
		<div class="container">
			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">anasayfa</a></li>
					<li class="item-link"><span>giriş yap</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="login-form form-item form-stl">
                            <x-jet-validation-errors class="mb-4" />
								<form name="frm-login" method="POST" action="{{route('login')}}">
                                    @csrf
									<fieldset class="wrap-title">
										<h3 class="form-title">Hesabınıza giriş yapın</h3>
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-uname">Email Adresi:</label>
										<input type="email" id="frm-login-uname" name="email" placeholder="Email adresi girin" :value="old('email')" required autofocus>
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-pass">Şifre:</label>
										<input type="password" id="frm-login-pass" name="password" placeholder="************" required autocomplete="current-password">
									</fieldset>
									<fieldset class="wrap-input">
										<label class="remember-field">
											<input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
										</label>
										<a class="link-function left-position" href="{{route ('password.request')}}" title="Forgotten password?">Forgotten password?</a>
									</fieldset>
									<input type="submit" class="btn btn-submit" value="Giriş" name="submit">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</x-guest-layout>
