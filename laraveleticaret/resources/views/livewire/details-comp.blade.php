<main id="main" class="main-site">
    <style>
        .regprice {
            font-weight: 300;
            font-size: 13px !important;
            color: #aaaaaa !important;
            text-decoration: line-through;
            padding-left: 10px;
        }
    </style>
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">anasayfa</a></li>
                <li class="item-link"><span>detay</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery" wire:ignore>
                            <ul class="slides">
                                <li data-thumb="{{asset('Front')}}/assets/images/products/{{$product->image}}">
                                    <img src="{{asset('Front')}}/assets/images/products/{{$product->image}}"
                                         alt="{{$product->name}}"/>
                                </li>
                                @php
                                    $images = explode(",",$product->images);
                                @endphp
                                @foreach($images as $image)
                                    @if($image)
                                    <li data-thumb="{{asset('Front')}}/assets/images/products/{{$image}}">
                                        <img src="{{asset('Front')}}/assets/images/products/{{$image}}"
                                             alt="{{$product->name}}"/>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="detail-info">
                        <div class="product-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <a href="#" class="count-review">(5 inceleme puanı)</a>
                        </div>
                        <h2 class="product-name">{{$product->name}}</h2>
                        <div class="short-desc">
                            {{$product->short_description}}
                        </div>
                        <div class="wrap-social">
                            <a class="link-socail" href="#"><img src="{{asset('Front')}}/assets/images/social-list.png" alt=""></a>
                        </div>
                        @if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                            <div class="wrap-price">
                                <span class="product-price">{{$product->sale_price}} TL</span>
                                <del><span class="product-price regprice">{{$product->regular_price}} TL</span></del>
                            </div>
                        @else
                            <div class="wrap-price"><span class="product-price">{{$product->regular_price}} TL</span>
                            </div>
                        @endif
                        <div class="stock-info in-stock">
                            <p class="availability">Stok Durumu: <b>{{$product->stock_status}}</b></p>
                        </div>
                        <div class="quantity">
                            <span>Adet:</span>
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" wire:model="qty">

                                <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity"></a>
                                <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity"></a>
                            </div>
                        </div>
                        <div class="wrap-butons">
                            @if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                <a href="#" class="btn add-to-cart"
                                   wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})">Sepete Ekle</a>
                            @else
                                <a href="#" class="btn add-to-cart"
                                   wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Sepete Ekle</a>
                            @endif
                            <div class="wrap-btn">
                                <a href="#" class="btn btn-compare">Ekle Karşılaştır</a>
                                <a href="#" class="btn btn-wishlist">Ekle Favoriler</a>
                            </div>
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">açıklama</a>
                            <a href="#add_infomation" class="tab-control-item">Ek Bilgi</a>
                            <a href="#review" class="tab-control-item">İncelemeler</a>
                        </div>
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                                {{$product->description}}
                            </div>
                            <div class="tab-content-item " id="add_infomation">
                                <table class="shop_attributes">
                                    <tbody>
                                    <tr>
                                        <th>Ağırlık</th>
                                        <td class="product_weight">1 kg</td>
                                    </tr>
                                    <tr>
                                        <th>Ölçüler</th>
                                        <td class="product_dimensions">12 x 15 x 23 cm</td>
                                    </tr>
                                    <tr>
                                        <th>Renk</th>
                                        <td><p>Siyah, Mavi, Gri, Beyaz</p></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-content-item " id="review">
                                <div class="wrap-review-form">
                                    <div id="comments">
                                        <h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6 Chainsaw Omnidirectional [Orage]</span>
                                        </h2>
                                        <ol class="commentlist">
                                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                id="li-comment-20">
                                                <div id="comment-20" class="comment_container">
                                                    <img alt="" src="{{asset('Front')}}/assets/images/author-avata.jpg"
                                                         height="80" width="80">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
                                                        </div>
                                                        <p class="meta">
                                                            <strong class="woocommerce-review__author">admin</strong>
                                                            <span class="woocommerce-review__dash">–</span>
                                                            <time class="woocommerce-review__published-date"
                                                                  datetime="2008-02-14 20:00">Tue, Aug 15, 2017
                                                            </time>
                                                        </p>
                                                        <div class="description">
                                                            <p>Pellentesque habitant morbi tristique senectus et netus
                                                                et malesuada fames ac turpis egestas.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <form action="#" method="post" id="commentform" class="comment-form"
                                                      novalidate="">
                                                    <p class="comment-notes">
                                                        <span
                                                            id="email-notes">Your email address will not be published.</span>
                                                        Required fields are marked <span class="required">*</span>
                                                    </p>
                                                    <div class="comment-form-rating">
                                                        <span>Your rating</span>
                                                        <p class="stars">
                                                            <label for="rated-1"></label>
                                                            <input type="radio" id="rated-1" name="rating" value="1">
                                                            <label for="rated-2"></label>
                                                            <input type="radio" id="rated-2" name="rating" value="2">
                                                            <label for="rated-3"></label>
                                                            <input type="radio" id="rated-3" name="rating" value="3">
                                                            <label for="rated-4"></label>
                                                            <input type="radio" id="rated-4" name="rating" value="4">
                                                            <label for="rated-5"></label>
                                                            <input type="radio" id="rated-5" name="rating" value="5"
                                                                   checked="checked">
                                                        </p>
                                                    </div>
                                                    <p class="comment-form-author">
                                                        <label for="author">Name <span class="required">*</span></label>
                                                        <input id="author" name="author" type="text" value="">
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <label for="email">Email <span class="required">*</span></label>
                                                        <input id="email" name="email" type="email" value="">
                                                    </p>
                                                    <p class="comment-form-comment">
                                                        <label for="comment">Your review <span class="required">*</span>
                                                        </label>
                                                        <textarea id="comment" name="comment" cols="45"
                                                                  rows="8"></textarea>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit"
                                                               value="Submit">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget widget-our-services ">
                    <div class="widget-content">
                        <ul class="our-services">
                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Ücretsiz Kargo</b>
                                        <span class="subtitle">200 TL Üzeri ücretsiz kargo</span>
                                        <p class="desc">Hızlı ve güvenilir kargolama...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Özel Paket</b>
                                        <span class="subtitle">Hediye paketi yaptır!</span>
                                        <p class="desc">Sevdikleriniz için hediye paketleri hazırlayın...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">İade ve Değişim</b>
                                        <span class="subtitle">7 gün içerisinde değişim</span>
                                        <p class="desc">Ürünlerimizde iade ve değişim gerçekleşir...</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Popüler Ürünler</h2>
                    <div class="widget-content">
                        <ul class="products">
                            @foreach($popular_products as $p_product)
                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="{{route('product.details',['slug'=>$p_product->slug])}}"
                                               title="{{$p_product->name}}">
                                                <figure><img
                                                        src="{{asset('Front')}}/assets/images/products/{{$p_product->image}}"
                                                        alt="{{$p_product->name}}"></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details',['slug'=>$p_product->slug])}}"
                                               title="{{$p_product->name}}"
                                               class="product-name"><span>{{$p_product->name}}</span></a>
                                            <div class="wrap-price"><span
                                                    class="product-price">${{$p_product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">İlgili Ürünler</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                             data-loop="false" data-nav="true" data-dots="false"
                             data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>
                            @foreach($relatad_products as $r_product)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{route('product.details',['slug'=>$r_product->slug])}}"
                                           title="{{$r_product->name}}">
                                            <figure><img
                                                    src="{{asset('Front')}}/assets/images/products/{{$r_product->image}}"
                                                    width="214" height="214" alt="{{$r_product->name}}"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">yeni</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">gözat</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('product.details',['slug'=>$r_product->slug])}}"
                                           class="product-name"><span>{{$r_product->name}}</span></a>
                                        <div class="wrap-price"><span
                                                class="product-price">{{$r_product->regular_price}} TL</span></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
