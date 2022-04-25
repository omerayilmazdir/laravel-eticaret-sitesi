<main id="main" class="main-site left-sidebar">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">anasayfa</a></li>
                <li class="item-link"><span>Favoriler</span></li>
            </ul>
        </div>
        <style>
            .product-wish{
                position: absolute;
                top: 10px;
                left: 0;
                z-index:99;
                right: 30px;
                text-align: right;
                padding-top: 0;
            }
            .product-wish .fa{
                color: #cbcbcb;
                font-size: 32px;
            }
            .product-wish .fa:hover{
                color:red;
            }
            .fill-heart{
                color: red !important;
            }

        </style>
        <div class="row">
            @if(Cart::instance('wishlist')->content()->count() > 0)
            <ul class="product-list grid-products equal-container">
                @foreach (Cart::instance('wishlist')->content() as $item)

                    <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{route('product.details',['slug'=>$item->model->slug])}}" title="{{$item->model->name}}">
                                    <figure><img src="{{asset('Front/assets/images/products')}}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{route('product.details',['slug'=>$item->model->slug])}}" class="product-name"><span>{{$item->model->name}}</span></a>
                                <div class="wrap-price"><span class="product-price">${{$item->model->regular_price}}</span></div>
                                <a href="#" class="btn add-to-cart" wire:click.prevent="moveProductFormWishlistToCart('{{$item->rowId}}')">Sepete taşı</a>
                                <div class="product-wish">
                                    <a href="#" wire:click.prevent="removeFromWishList({{$item->model->id}})"><i class="fa fa-heart fill-heart"></i> </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            @else
            <h4>Favorilerde hiç ürün yok.</h4>
            @endif
        </div>
        </div>
</main>
