@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Edit Data Post</h3>
	<form action="{{ url('/post/' . $row->id) }}" method="POST">
		@method('patch')
		@csrf
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" class="form-control" required="required" name="title" value="{{ $row->title }}">
		</div>

		<div class="form-group">
			<label for="">Slug</label>
			<input type="text" class="form-control" required="required" name="slug" value="{{ $row->slug }}">
		</div>

		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" class="form-control" required="required" name="text" value="{{ $row->text }}">
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
			<input type="submit" class="btn btn-primary" value="UPDATE">
		</div>
	</form>
</div>

@endsection