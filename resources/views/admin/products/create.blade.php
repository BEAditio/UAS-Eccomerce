@extends('layouts.top')

@section('content')
        <div class="col-md-12">
         <div class="box box-danger">
          <div class="box-header with-border">
            <h2>Tambah Product</h2>
            <br/>
            @if(count($errors))
                <div class="form-group">
                    <div clas="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <br/>

            <form action="{{ route('admin.products.store') }}" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label">Nama Produk</label>
                    <div>
                    <span>
                    <input type="text" name="name" class="form-control" placeholder="Nama Produk">
                    </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Harga</label>
                    <div>
                    <span>
                    <input type="number" name="price" class="form-control" placeholder="Harga">
                    </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Deskripsi</label>
                    <div>
                    <span>
                    <textarea name="description" class="form-control" rows="3" placeholder="Deskripsi"></textarea>
                    </span>
                    </div>
                </div>
                <div class="form-group increment">
					<label class="control-label">Image</label>
                    <div>
                    <span>
					<input required type="file" name="image_url" class="form-control">
                    </span>
                    </div>
				</div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Back</a>
            </form>        
        </div>
    </div>
</div>
@endsection