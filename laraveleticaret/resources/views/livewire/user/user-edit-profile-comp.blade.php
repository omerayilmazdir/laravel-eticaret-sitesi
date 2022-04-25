<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profili Güncelle
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form wire:submit.prevent="updateProfile">
                    <div class="col-md-4">
                        @if($newimage)
                            <img src="{{$newimage->temporaryUrl()}}" width="100%" />
                        @elseif($image)
                            <img src="{{asset('Front/assets/images/profile')}}/{{$image}}" width="100%" />
                        @else
                            <img src="{{asset('Front/assets/images/profile/profile.jpg')}}" width="100%" />
                        @endif
                        <input type="file" class="form-control" wire:model="newimage"/>
                    </div>
                    <div class="col-md-8">
                        <p><b>Ad: </b><input type="text" class="form-control" wire:model="name"/></p>
                        <p><b>Email: </b>{{$email}}</p>
                        <p><b>Cep Telefonu: </b><input type="text" class="form-control" wire:model="mobile"/></p>
                        <hr>
                        <p><b>Adres1: </b><input type="text" class="form-control" wire:model="line1"/></p>
                        <p><b>Adres2: </b><input type="text" class="form-control" wire:model="line2"/></p>
                        <p><b>Şehir: </b><input type="text" class="form-control" wire:model="city"/></p>
                        <p><b>İlçe: </b><input type="text" class="form-control" wire:model="province"/></p>
                        <p><b>Ülke: </b><input type="text" class="form-control" wire:model="country"/></p>
                        <p><b>Posta Kodu: </b><input type="text" class="form-control" wire:model="zipcode"/></p>
                        <button type="submit" class="btn btn-info pull-right">Güncelle</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
