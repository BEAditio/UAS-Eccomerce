@extends('layouts.top')

@section('content')
<div class="col-md-12">
         <div class="box box-danger">
          <div class="box-header with-border">
            <h2>Product</h2>
            <div>
                <a href="{{route('admin.products.create')}}" class="btn btn-primary">Tambah Produk</a>
            </div>
            <br/>
            
        

    <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Create At</th>
                        <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($products as $product)
                        <td>{{$product['id']}}</td>
                        <td>{{$product['name']}}</td>
                        <td>{{$product['price']}}</td>
                        <td>{{$product['created_at']}}</td>
                        <td>
                        <a href="{{route('admin.products.edit',$product->id)}}">Edit</a>|
                        <a href="{{route('admin.products.show',$product->id)}}">Detail</a>
                        <form action="{{route('admin.products.destroy',$product->id)}}" method="post">
                                 @csrf
                                @method('Delete')
                                <button onclick="return confirm('Yakin Mau di Hapus ?')" type="submit">Delete</button>
                        </form>
                        </td>
                        
                        </tbody>
                        @endforeach
                        <tfoot>
                        <tr>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Create At</th>
                        <th>Aksi</th>
                        </tr>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>
<br><br>
</div>

@endsection