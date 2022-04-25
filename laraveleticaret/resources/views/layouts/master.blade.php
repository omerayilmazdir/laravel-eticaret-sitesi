<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teknolojik Ürünler Satış Sitesi</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Front')}}/assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('Front')}}/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Front')}}/assets/css/font-awesome.min.css">
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('Front')}}/assets/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Front')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('Front')}}/assets/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Front')}}/assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Front')}}/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Front')}}/assets/css/color-01.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles


</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
                                    <a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>İletişim: (+123) 456 789</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								@if(Route::has('login'))
								    @auth
									    @if(Auth::user()->utype === 'ADM')
									    <li class="menu-item menu-item-has-children parent" >
									    <a title="My Account" href="#">Hesabım ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									    <ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Profil" href="{{ route('admin.dashboard')}}">Veriler</a>
										</li>
                                            <li class="menu-item">
                                                <a title="Kategoriler" href="{{route('admin.categories')}}">Kategoriler</a>
                                            </li>
                                            <li class="menu-item">
                                                <a title="Tüm Ürünler" href="{{route('admin.products')}}">Tüm Ürünler</a>
                                            </li>
                                            <li class="menu-item">
                                                <a title="Ana Sayfa Slider" href="{{route('admin.homeslider')}}">Ana Sayfa Slider</a>
                                            </li>
                                            <li class="menu-item">
                                                <a title="Ana Sayfa Kategoriler" href="{{route('admin.homecategories')}}">Ana Sayfa Kategoriler</a>
                                            </li>
                                            <li class="menu-item">
                                                <a title="İndirim Ürünleri" href="{{route('admin.sale')}}">İndirim Ürünleri</a>
                                            </li>
                                            <li class="menu-item">
                                                <a title="Tüm Siparişler" href="{{route('admin.orders')}}">Tüm Siparişler</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Çıkış</a>
                                            </li>
                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                             @csrf
                                            </form>
									    </ul>
								        </li>
									    @else
									    <li class="menu-item menu-item-has-children parent" >
									    <a title="My Account" href="#">Hesabım ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									    <ul class="submenu curency" >
                                            <li class="menu-item" >
                                                <a title="Profilim" href="{{ route('user.profile')}}">Profilim</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Siparişlerim" href="{{ route('user.orders')}}">Siparişlerim</a>
                                            </li>

                                            <li class="menu-item" >
                                                <a title="Şifre Değiştir" href="{{ route('user.changepassword')}}">Şifre Değiştir</a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Çıkış</a>
                                            </li>
                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            </form>
									    </ul>
								        </li>
									    @endif
								@else
								<li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Giriş Yap</a></li>
								<li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Kayıt Ol !</a></li>
								@endif
                            @endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="{{asset('Front')}}/assets/images/logo-top-1.png" alt="mercado"></a>
						</div>

                        @livewire('header-search-comp')

						<div class="wrap-icon right-section">
                        @livewire('wishlist-count-comp')

                        @livewire('cart-count-comp')

							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">Haftanın öne çıkanları</a><span class="nav-label hot-label">yeni</span></li>
								<li class="menu-item"><a href="#" class="link-term">En yeni ürünler</a><span class="nav-label hot-label">yeni</span></li>
								<li class="menu-item"><a href="#" class="link-term">En çok satanlar</a><span class="nav-label hot-label">yeni</span></li>
								<li class="menu-item"><a href="#" class="link-term">En yüksek oy alanlar</a><span class="nav-label hot-label">yeni</span></li>
							</ul>
						</div>
					</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="#" class="link-term mercado-item-title">Hakkımızda</a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Mağaza</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Sepet</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Sipariş</a>
								</li>
								<li class="menu-item">
									<a href="#" class="link-term mercado-item-title">İletişim</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

    {{$slot}}

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Ücretsiz Kargo</h4>
								<p class="fc-desc">200 TL Üzeri ücretsiz kargo</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Garanti</h4>
								<p class="fc-desc">15 Gün iade garantisi</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Güvenilir Ödeme</h4>
								<p class="fc-desc">Güvenilir ödeme yöntemleri</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Destek</h4>
								<p class="fc-desc">Online destek 7/24</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">İletişim Adresi</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Batı Mh. Pendik/İstanbul 34896 TÜRKİYE</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">Destek@teknolojikurunler.com</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">İletişim Yolları</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Destek için arayın</span>
										<b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
									</div>
								</div>
							</div>

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Siteye kayıt oluşturun</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Email adresini giriniz">
											<button class="btn-submit">Gönder</button>
										</form>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Hava Durumu</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
                                            <!-- weather widget start --><div id="m-booked-weather-bl250-80871"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:250px;" id="width1"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-18"> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>13</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>14&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>9&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">İstanbul </div> <div class="booked-wzs-250-175-date">Perşembe, 21 Nisan</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">7 Günlük Hava Tahmini</span> </div> </div> </div> </div> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Cu</td> <td>Ct</td> <td>Pz</td> <td>Pt</td> <td>Sa</td> <td>Ça</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>20&deg;</td> <td class="week-day-val"><span class="plus">+</span>20&deg;</td> <td class="week-day-val"><span class="plus">+</span>21&deg;</td> <td class="week-day-val"><span class="plus">+</span>20&deg;</td> <td class="week-day-val"><span class="plus">+</span>21&deg;</td> <td class="week-day-val"><span class="plus">+</span>21&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> </tr> </table> </div> </div> </div><script type="text/javascript"> var css_file=document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData_80871(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-80871'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=18319;type=3;scode=124;ltid=3457;domid=765;anc_id=97818;countday=undefined;cmetric=1;wlangID=21;color=137AE9;wwidth=250;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=80871';var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script><!-- weather widget end -->
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Kullandığımız ödeme yöntemleri:</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="{{asset('Front')}}/assets/images/payment.png" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Sosyal medya</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">EURO & DOLAR KURU</h3>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
                                        <?php
                                        $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);
                                        ?>
                                        <ul>
                                            <li>
                                                <span><i class="fa fa-usd"></i> USD</span>
                                                <span> Fiyat: <?php echo $JSON['USD']['satis']; ?></span>
                                                <span>Değişim: <?php echo $JSON['USD']['degisim']; ?></span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-eur"></i> EUR</span>
                                                <span> Fiyat: <?php echo $JSON['EUR']['satis']; ?></span>
                                                <span>Değişim: <?php echo $JSON['EUR']['degisim']; ?></span>
                                            </li>
                                        </ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="wrap-back-link">
					<div class="container">
						<div class="back-link-box">
							<h3 class="backlink-title">Hızlı Bağlantılar</h3>
							<div class="back-link-row">
								<ul class="list-back-link" >
									<li><span class="row-title">Mobiles:</span></li>
									<li><a href="#" class="redirect-back-link" title="mobile">Mobiles</a></li>
									<li><a href="#" class="redirect-back-link" title="yphones">YPhones</a></li>
									<li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Gianee Mobiles GL</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Mobiles Karbonn</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Viva">Mobiles Viva</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Intex">Mobiles Intex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Micrumex">Mobiles Micrumex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Bsus">Mobiles Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Samsyng">Mobiles Samsyng</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Lenova">Mobiles Lenova</a></li>
								</ul>

								<ul class="list-back-link" >
									<li><span class="row-title">Tablets:</span></li>
									<li><a href="#" class="redirect-back-link" title="Plesc YPads">Plesc YPads</a></li>
									<li><a href="#" class="redirect-back-link" title="Samsyng Tablets" >Samsyng Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Qindows Tablets" >Qindows Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Calling Tablets" >Calling Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Micrumex Tablets" >Micrumex Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus" >Lenova Tablets Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets iBall" >Tablets iBall</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets Swipe" >Tablets Swipe</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets TVs, Audio" >Tablets TVs, Audio</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2022. Tüm hakları saklıdır.</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="#" class="link-term">Hakkımızda</a></li>
								<li class="menu-item"><a href="#" class="link-term">Gizlilik Politikası</a></li>
								<li class="menu-item"><a href="#" class="link-term">Şartlar & Koşullar</a></li>
								<li class="menu-item"><a href="#" class="link-term">İade Politikası</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	<script src="{{asset('Front')}}/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="{{asset('Front')}}/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="{{asset('Front')}}/assets/js/bootstrap.min.js"></script>
	<script src="{{asset('Front')}}/assets/js/jquery.flexslider.js"></script>
	{{-- <script src="{{asset('Front')}}/assets/js/chosen.jquery.min.js"></script>--}}
	<script src="{{asset('Front')}}/assets/js/owl.carousel.min.js"></script>
	<script src="{{asset('Front')}}/assets/js/jquery.countdown.min.js"></script>
	<script src="{{asset('Front')}}/assets/js/jquery.sticky.js"></script>
	<script src="{{asset('Front')}}/assets/js/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    @livewireScripts
    @stack('scripts')

</body>
</html>
