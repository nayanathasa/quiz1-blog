@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Tambah Data Post</h3>
	<form class="" action="{{ url('/post') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" class="form-control" name="title" placeholder="Judul Post">
		</div>

		<div class="form-group">
			<label for="">Slug</label>
			<input type="text" class="form-control" name="slug" placeholder="Slug Post">
		</div>

		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" class="form-control" name="text" placeholder="Keterangan Post">
		</div>

		<div class="form-group">
			<label for="">Kategori</label>
			<select name="category_id" class="form-control">
				@foreach ($category as $cat)
				<option value="{{ $cat->id }}"> {{ $cat->name }} </option>
				@endforeach
			</select>
		</div>	
			
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="SIMPAN">
		</div>
	</form>
</div>

@endsection