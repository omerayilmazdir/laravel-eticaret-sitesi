<main id="main" class="main-site">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">anasayfa</a></li>
                <li class="item-link"><span>Sipariş ver</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-address-billing">
                        <h3 class="box-title">Fatura adresi</h3>
                        <div class="billing-address">
                            <p class="row-in-form">
                                <label for="fname">ad<span>*</span></label>
                                <input type="text" name="fname" value="" placeholder="Adınız" wire:model="firstname">
                                @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="lname">soyad<span>*</span></label>
                                <input type="text" name="lname" value="" placeholder="soyadınız" wire:model="lastname">
                                @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="email">Email Adresi:</label>
                                <input type="email" name="email" value="" placeholder="Email" wire:model="email">
                                @error('email') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="phone">Cep Telefonu<span>*</span></label>
                                <input type="number" name="phone" value="" placeholder="10 karakterli cep numarası girin" wire:model="mobile">
                                @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="add">Adres1:</label>
                                <input type="text" name="add" value="" placeholder="Adresinizi girin" wire:model="line1">
                                @error('line1') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="add">Adres2:</label>
                                <input type="text" name="add" value="" placeholder="Adresinizi girin" wire:model="line2">
                                @error('line2') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="country">Ülke<span>*</span></label>
                                <input type="text" name="country" value="" placeholder="Ülke adı" wire:model="country">
                                @error('country') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="city">İlçe<span>*</span></label>
                                <input type="text" name="province" value="" placeholder="İlçe adı" wire:model="province">
                                @error('province') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="city">Şehir<span>*</span></label>
                                <input type="text" name="city" value="" placeholder="Şehir adı" wire:model="city">
                                @error('city') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="zip-code">Posta Kodu:</label>
                                <input type="number" name="zip-code" value="" placeholder="Posta kodunuz" wire:model="zipcode">
                                @error('zipcode') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form fill-wife">
                                <label class="checkbox-field">
                                    <input name="different-add" id="different-add" value="1" type="checkbox"
                                           wire:model="ship_to_different">
                                    <span>Gönderi adresiniz farklı mı?</span>
                                </label>
                            </p>
                        </div>
                    </div>
                </div>
                @if($ship_to_different)
                    <div class="col-md-12">
                        <div class="wrap-address-billing">
                            <h3 class="box-title">Gönderi Adresi</h3>
                            <div class="billing-address">
                                <p class="row-in-form">
                                    <label for="fname">ad<span>*</span></label>
                                    <input type="text" name="fname" value="" placeholder="Adınız" wire:model="s_firstname">
                                    @error('s_firstname') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="lname">soyad<span>*</span></label>
                                    <input type="text" name="lname" value="" placeholder="Soyadınız" wire:model="s_lastname">
                                    @error('s_lastname') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="email">Email Adresiniz:</label>
                                    <input type="email" name="email" value="" placeholder="Email" wire:model="s_email">
                                    @error('s_email') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="phone">Cep Telefonu<span>*</span></label>
                                    <input type="number" name="phone" value="" placeholder="10 karakterli cep numarası giriniz" wire:model="s_mobile">
                                    @error('s_mobile') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="add">Adres1:</label>
                                    <input type="text" name="add" value="" placeholder="Adresinizi giriniz" wire:model="s_line1">
                                    @error('s_line1') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="add">Adres2:</label>
                                    <input type="text" name="add" value="" placeholder="Adresinizi giriniz" wire:model="s_line2">
                                    @error('s_line2') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="country">Ülke<span>*</span></label>
                                    <input type="text" name="country" value="" placeholder="Ülke adı" wire:model="s_country">
                                    @error('s_country') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="city">İlçe<span>*</span></label>
                                    <input type="text" name="province" value="" placeholder="İlçe adı" wire:model="s_province">
                                    @error('s_province') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="city">Şehir<span>*</span></label>
                                    <input type="text" name="city" value="" placeholder="Şehir adı" wire:model="s_city">
                                    @error('s_city') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="zip-code">Posta Kodu:</label>
                                    <input type="number" name="zip-code" value="" placeholder="Posta kodunuz" wire:model="s_zipcode">
                                    @error('s_zipcode') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="row-in-form fill-wife">
                                    <label class="checkbox-field">
                                        <input name="different-add" id="different-add" value="1" type="checkbox"
                                               wire:model="ship_to_different">
                                        <span>Gönderi adresiniz farklı mı?</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="summary summary-checkout">
                <div class="summary-item payment-method">
                    <h4 class="title-box">Ödeme Yöntemi</h4>
                    <p class="summary-info"><span class="title">Nakit / Ya da çek.</span></p>
                    <p class="summary-info"><span class="title">Dilerseniz kartınızı kaydedebilirsiniz.</span></p>
                    <div class="choose-payment-methods">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
                            <span>Kapıda ödeme</span>
                            <span class="payment-desc">Şimdi sipariş verin teslimatta ödeyin</span>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
                            <span>Banka / Kredi kartı</span>
                            <span
                                class="payment-desc">Güvenilir ödeme sistemiyle gönül rahatlığıyla kartınızla alışveriş yapabilirsiniz.</span>
                        </label>
                        @error('$paymentmode') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    @if(Session::has('checkout'))
                    <p class="summary-info grand-total"><span>Genel Toplam</span> <span
                            class="grand-total-price">${{Session::get('checkout')['total']}}</span></p>
                    @endif
                    @if($errors->isEmpty())
                        <div wire:ignore id="processing"
                             style="font-size: 22px; margin-bottom: 20px;padding-left:37px;color: green;display: none;">
                            <i class="fa fa-spinner fa-pulse fa-fw"></i>
                            <span>İşleniyor...</span>
                    </div>
                    @endif
                    <button type="submit" class="btn btn-medium">Şimdi sipariş ver</button>
                </div>
                <div class="summary-item shipping-method">
                    <h4 class="title-box f-title">Kargo yöntemi</h4>
                    <p class="summary-info"><span class="title">Sabit fiyat 20 TL</span></p>
                    <p class="summary-info"><span class="title">Ücretsiz kargo</span></p>
                </div>
            </div>
            </form>
        </div>
    </div>
</main>

