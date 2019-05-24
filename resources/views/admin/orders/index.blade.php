@extends('layouts.top')

@section('content')
<!-- <div class="container">
	<div class="row justify-content-center"> -->
		<div class="col-md-12">
		 <div class="box box-danger">
	      <div class="box-header with-border">
			<h2>List Order</h2>
			<div class="col-md-2">
				<a href="{{ route('admin.products.create')}}" class="btn btn-danger">Tambah Produk</a>
			</div>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-sm">
					<thead>
						<tr>
							<th>#</th>
							<th>Harga Total</th>
							<th>Status</th>
							<th>Alamat Pengiriman</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($orders as $order)
						<tr>
							<td>{{$order['id'] }}</td>
							<td>{{$order['total_price'] }}</td>
							<td>{{$order['status'] }}</td>
							<td>{{$order['zip_code'] }}</td>
							<td>{{$order['shipping_address'] }}</td>
							<td>
							 <div class="col-md-2">
								<a href="{{ route('admin.orders.show',['id' => $order['id']]) }}" class="btn btn-info"> Lihat
                                </a>
                        </div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection