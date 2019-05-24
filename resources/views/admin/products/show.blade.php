@extends('layouts.top')

@section('content')
<div class="col-md-12">
         <div class="box box-danger">
          <div class="box-header with-border">
            <h2>Hasil Product</h2>
            <br/>
            <div class="table-responsive">
                <table class="table table-hover table-sm">
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Price</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>Created_At</td>
                    </tr>
                    <tr>
                        <td>{{ $products['id']}}</td>
                        <td>{{ $products['name']}}</td>
                        <td>{{ $products['price']}}</td>
                        <td>{{ strip_tags($products['description'])}}</td>
                        <td> 
                        <!-- {{ $products['image_url'] }} -->
                        <img src="{{ url('image_files/'.$products->image_url) }}" class="img-thumbnail" width="300">
                        </td>
                        <td>{{ $products['created_at']}}</td>
                    </tr>
            </div>
                <a href="{{route('admin.products.index')}}" class="btn btn-primary">Kembali</a>       
        </div>
    </div>
</div>
@endsection