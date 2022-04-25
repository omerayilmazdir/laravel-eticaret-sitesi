<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tüm Siparişlerim
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Sipariş Id</th>
                                <th>Ara Toplam</th>
                                <th>İndirim</th>
                                <th>Vergiler</th>
                                <th>Toplam</th>
                                <th>Ad</th>
                                <th>Soyad</th>
                                <th>Cep Telefonu</th>
                                <th>Email</th>
                                <th>Posta Kodu</th>
                                <th>Durum</th>
                                <th>Sipariş Tarihi</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->subtotal}} TL</td>
                                    <td>{{$order->discount}} TL</td>
                                    <td>{{$order->tax}} TL</td>
                                    <td>{{$order->total}} TL</td>
                                    <td>{{$order->firstname}}</td>
                                    <td>{{$order->lastname}}</td>
                                    <td>{{$order->mobile}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->zipcode}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td><a href="{{route('user.orderdetails',['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Detay</a> </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
