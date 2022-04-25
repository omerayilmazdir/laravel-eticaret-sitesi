<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profilim
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        @if($user->profile->image)
                            <img src="{{asset('Front/assets/images/profile')}}/{{$user->profile->image}}" width="100%" />
                        @else
                            <img src="{{asset('Front/assets/images/profile/profile.jpg')}}" width="100%" />
                        @endif
                    </div>
                    <div class="col-md-8">
                        <p><b>Ad: </b>{{$user->name}}</p>
                        <p><b>Email: </b>{{$user->email}}</p>
                        <p><b>Cep Telefonu: </b>{{$user->profile->mobile}}</p>
                        <hr>
                        <p><b>Adres1: </b>{{$user->profile->line1}}</p>
                        <p><b>Adres2: </b>{{$user->profile->line2}}</p>
                        <p><b>Şehir: </b>{{$user->profile->city}}</p>
                        <p><b>İlçe: </b>{{$user->profile->province}}</p>
                        <p><b>Ülke: </b>{{$user->profile->country}}</p>
                        <p><b>Posta Kodu: </b>{{$user->profile->zipcode}}</p>
                        <a href="{{route('user.editprofile')}}" class="btn btn-info pull-right">Profili Güncelle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
