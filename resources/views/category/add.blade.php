@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Tambah Data Category</h3>
	<form class="" action="{{ url('/category') }}" method="post">
		@csrf
		<div class="form-group">
			<label for="">Nama</label>
			<input type="text" class="form-control" name="name" placeholder="Kategori name">
		</div>

		<div class="form-group">
			<label>Text</label>
			<input type="text" class="form-control" name="text" placeholder="Kategori text">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-success" value="SIMPAN">
		</div>

	</form>
</div>
@endsection