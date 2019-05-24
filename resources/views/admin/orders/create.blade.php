@extends('layouts.top')

@section('content')

		<div class="col-md-12">
		 <div class="box box-danger">
	      <div class="box-header with-border">
			<h2>Menambahkan Alamat</h2>

			<br />
			@if(count($errors))
			<div class="form-group">
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			</div>
			@endif
			<br />

			<form action="{{ route('admin.orders.store') }}" method="POST">
            {{ csrf_field() }}
				<div class="form-group">
					<label class="control-label">Alamat Pengiriman</label>
					<div>
					<span>
					<textarea name="shipping address" class="form-control" rows="3" placeholder="Alamat Pengiriman"></textarea>
					</span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label">Kode Pos</label>
					<div>
					<span>
					<input type="number" name="zip_code" class="form-control" placeholder="Kode Pos">
					</span>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
@endsection