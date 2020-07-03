@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Edit Data Photo</h3>
	<form action="{{ url('/photo/' . $row->id) }}" method="POST">
		@method('patch')
		@csrf
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" class="form-control" name="title" required="required" value="{{ $row->title }}">
		</div>

		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" class="form-control" name="text" required="required" value="{{ $row->text }}">
		</div>	

		<div class="form-group">
			<label for="">Post</label>
			<select name="post_id" class="form-control">
				@foreach ($posts as $post)
				<option value="{{ $post->id }}"> {{ $post->title }} </option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="UPDATE">
		</div>
	</form>
</div>

@endsection