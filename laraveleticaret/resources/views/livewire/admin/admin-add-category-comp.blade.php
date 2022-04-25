<div>
<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Yeni Kategori Ekle
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">Tüm Kategoriler</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form class="form-horizontal" wire:submit.prevent="storeCategory">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Kategori Adı</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Kategori Adı" class="form-control input-md" wire:model="name" wire:keyup="generateslug"/>
                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Kategori Anahtar Kelime</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Kategori Anahtar Kelime" class="form-control input-md" wire:model="slug" />
                            @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
