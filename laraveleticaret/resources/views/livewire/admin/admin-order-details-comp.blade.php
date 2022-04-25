<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Sipariş Detayları
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.orders')}}" class="btn btn-success pull-right">Tüm Siparişler</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Sipariş Id</th>
                                <td>{{$order->id}}</td>
                                <th>Sipariş Tarihi</th>
                                <td>{{$order->created_at}}</td>
                                <th>Durum</th>
                                <td>{{$order->status}}</td>
                                @if($order->status == "delivered")
                                <th>Sipariş Tarihi</th>
                                <td>{{$order->delivered_date}}</td>
                                @elseif($order->status == "canceled")
                                    <th>İptal Tarihi</th>
                                    <td>{{$order->canceled_date}}</td>
                                @endif
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Sipariş Edilen Ürünler
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                                <h3 class="box-title">Ürün İsmi</h3>
                                <ul class="products-cart">
                                    @foreach($order->orderItems as $item)
                                        <li class="pr-cart-item">
                                            <div class="product-image">
                                                <figure><img src="{{asset('Front')}}/assets/images/products/{{$item->product->image}}" alt="{{$item->product->name}}"></figure>
                                            </div>
                                            <div class="product-name">
                                                <a class="link-to-product" href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a>
                                            </div>
                                            <div class="price-field product-price"><p class="price">{{$item->product->regular_price}} TL</p></div>
                                        </li>
                                    @endforeach
                                </ul>
                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Sipariş Özeti</h4>
                                <p class="summary-info"><span class="title">Ara Toplam</span><b class="index">{{$order->subtotal}} TL</b></p>
                                <p class="summary-info"><span class="title">Vergiler</span><b class="index">{{$order->tax}} TL</b></p>
                                <p class="summary-info"><span class="title">Kargo</span><b class="index">Ücretsiz Kargo</b></p>
                                <p class="summary-info"><span class="title">Toplam</span><b class="index">{{$order->total}} TL</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Fatura Detayları
                    </div>
                    <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Ad</th>
                            <td>{{$order->firstname}}</td>
                            <th>Soyad</th>
                            <td>{{$order->lastname}}</td>
                        </tr>
                        <tr>
                            <th>Cep Telefonu</th>
                            <td>{{$order->mobile}}</td>
                            <th>Email</th>
                            <td>{{$order->email}}</td>
                        </tr>
                        <tr>
                            <th>Adres1</th>
                            <td>{{$order->line1}}</td>
                            <th>Adres2</th>
                            <td>{{$order->line2}}</td>
                        </tr>
                        <tr>
                            <th>Şehir</th>
                            <td>{{$order->city}}</td>
                            <th>İlçe</th>
                            <td>{{$order->province}}</td>
                        </tr>
                        <tr>
                            <th>Ülke</th>
                            <td>{{$order->country}}</td>
                            <th>Posta Kodu</th>
                            <td>{{$order->zipcode}}</td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        @if($order->is_shipping_different)
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Kargo Detayları
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Ad</th>
                                <td>{{$order->shipping->firstname}}</td>
                                <th>Soyad</th>
                                <td>{{$order->shipping->lastname}}</td>
                            </tr>
                            <tr>
                                <th>Telefon</th>
                                <td>{{$order->shipping->mobile}}</td>
                                <th>Email</th>
                                <td>{{$order->shipping->email}}</td>
                            </tr>
                            <tr>
                                <th>Adres1</th>
                                <td>{{$order->shipping->line1}}</td>
                                <th>Adres2</th>
                                <td>{{$order->shipping->line2}}</td>
                            </tr>
                            <tr>
                                <th>Şehir</th>
                                <td>{{$order->shipping->city}}</td>
                                <th>İlçe</th>
                                <td>{{$order->shipping->province}}</td>
                            </tr>
                            <tr>
                                <th>Ülke</th>
                                <td>{{$order->shipping->country}}</td>
                                <th>Posta Kodu</th>
                                <td>{{$order->shipping->zipcode}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Ödeme
                    </div>
                    <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Ödeme Yöntemi</th>
                            <td>{{$order->transcation->mode}}</td>
                        </tr>
                        <tr>
                            <th>Durum</th>
                            <td>{{$order->transcation->status}}</td>
                        </tr>
                        <tr>
                            <th>Ödeme Tarihi</th>
                            <td>{{$order->transcation->created_at}}</td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
