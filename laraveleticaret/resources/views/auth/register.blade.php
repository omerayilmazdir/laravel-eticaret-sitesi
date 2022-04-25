<x-guest-layout>

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">anasayfa</a></li>
					<li class="item-link"><span>kayıt ol</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">
                            <x-jet-validation-errors class="mb-4" />
								<form class="form-stl" action="{{route ('register')}}" name="frm-login" method="POST" >
								@csrf
                                <fieldset class="wrap-title">
										<h3 class="form-title">Hesap oluştur</h3>
										<h4 class="form-subtitle">Kişisel bilgiler. * işaretli alanların doldurulması zorunludur.</h4>
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-reg-lname">Ad*</label>
										<input type="text" id="frm-reg-lname" name="name" placeholder="Adınız" :value="name" required autofocus autocomplete="name">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-reg-email">Email Adresi*</label>
										<input type="email" id="frm-reg-email" name="email" placeholder="Email adresiniz" :value="email">
									</fieldset>

									<fieldset class="wrap-title">
										<h3 class="form-title">Giriş bilgileri</h3>
									</fieldset>
									<fieldset class="wrap-input item-width-in-half left-item ">
										<label for="frm-reg-pass">Şifre *</label>
										<input type="password" id="frm-reg-pass" name="password" placeholder="Şifre" required autocomplete="new-password">
									</fieldset>
									<fieldset class="wrap-input item-width-in-half ">
										<label for="frm-reg-cfpass">Şifre tekrar *</label>
										<input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Şifre tekrar" required autocomplete="new-password">
									</fieldset>
									<input type="submit" class="btn btn-sign" value="Kayıt Ol" name="register">
								</form>
							</div>
						</div>
					</div><!--end main products area-->
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

</x-guest-layout>
