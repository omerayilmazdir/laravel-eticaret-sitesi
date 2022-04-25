<main id="main" class="main-site">
<div class="container">
    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">anasayfa</a></li>
            <li class="item-link"><span>sepet</span></li>
        </ul>
    </div>
    <div class=" main-content-area">
        @if(Cart::instance('cart')->count() > 0)

        <div class="wrap-iten-in-cart">
            @if(Session::has('success_message'))
                <div class="alert alert-success">
                    <strong>Başarılı</strong> {{Session::get('success_message')}}
                </div>
            @endif
            @if(Cart::instance('cart')->count() > 0)
            <h3 class="box-title">Ürün İsimleri</h3>
            <ul class="products-cart">
                @foreach(Cart::instance('cart')->content() as $item)
                <li class="pr-cart-item">
                    <div class="product-image">
                        <figure><img src="{{asset('Front')}}/assets/images/products/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
                    </div>
                    <div class="product-name">
                        <a class="link-to-product" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
                    </div>
                    <div class="price-field product-price"><p class="price">{{$item->model->regular_price}} TL</p></div>
                    <div class="quantity">
                        <div class="quantity-input">
                            <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >
                            <div class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></div>
                            <div class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></div>
                        </div>
                    </div>
                    <div class="price-field sub-total"><p class="price">{{$item->subtotal}} TL</p></div>
                    <div class="delete">
                        <a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" class="btn btn-delete" title="">
                            <span>Delete from your cart</span>
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
            @else
                <p>Sepette ürün yok</p>
            @endif
        </div>
        <div class="summary">
            <div class="order-summary">
                <h4 class="title-box">Sipariş Özeti</h4>
                <p class="summary-info"><span class="title">Ara Toplam</span><b class="index">{{Cart::instance('cart')->subtotal()}} TL</b></p>
                <p class="summary-info"><span class="title">Vergiler</span><b class="index">{{Cart::instance('cart')->tax()}} TL</b></p>
                    <p class="summary-info"><span class="title">Kargo</span><b class="index">Ücretsiz Kargo</b></p>
                    <p class="summary-info total-info "><span class="title">Toplam</span><b class="index">{{Cart::instance('cart')->total()}} TL</b></p>
            </div>
            <div class="checkout-info">
                <label class="checkbox-field">
                    <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>Kupon kullanmak istiyorum</span>
                </label>
                <a class="btn btn-checkout" href="#" wire:click.prevent="checkout">Sipariş ver</a>
                <a class="link-to-shop" href="/shop">Alışverişe devam et<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
            </div>
            <div class="update-clear">
                <a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Sepeti boşalt</a>
                <a class="btn btn-update" href="#">Sepeti Güncelle</a>
            </div>
        </div>
        @else
            <div class="text-center" style="padding: 30px 0;">
                <h1>Sepetinde ürün yok!</h1>
                <p>Şimdi sepete ürün ekle</p>
                <a href="/shop" class="btn btn-success">Alışveriş Yap</a>
            </div>
        @endif
        <div class="wrap-show-advance-info-box style-1 box-in-site">
            <h3 class="title-box">Daha Önce Gezilenler</h3>
            <div class="wrap-products">
                <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{asset('Front')}}/assets/images/products/digital_04.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item new-label">yeni</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">gözat</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><span class="product-price">250.00 TL</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{asset('Front')}}/assets/images/products/digital_17.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item sale-label">indirim</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">gözat</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><ins><p class="product-price">168.00 TL</p></ins> <del><p class="product-price">250.00 TL</p></del></div>
                        </div>
                    </div>
                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{asset('Front')}}/assets/images/products/digital_15.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item new-label">yeni</span>
                                <span class="flash-item sale-label">indirim</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">gözat</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><ins><p class="product-price">168.00 TL</p></ins> <del><p class="product-price">250.00 TL</p></del></div>
                        </div>
                    </div>
                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{asset('Front')}}/assets/images/products/digital_01.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item bestseller-label">En çok satan</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">gözat</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><span class="product-price">250.00 TL</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{asset('Front')}}/assets/images/products/digital_21.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">gözat</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><span class="product-price">250.00 TL</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{asset('Front')}}/assets/images/products/digital_03.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item sale-label">indirim</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">gözat</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><ins><p class="product-price">168.00 TL</p></ins> <del><p class="product-price">250.00 TL</p></del></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{asset('Front')}}/assets/images/products/digital_04.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item new-label">yeni</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">gözat</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><span class="product-price">250.00 TL</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{asset('Front')}}/assets/images/products/digital_05.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item bestseller-label">En çok satan</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">gözat</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><span class="product-price">250.00 TL</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

