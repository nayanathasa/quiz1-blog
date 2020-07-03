@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Tambah Data Photo</h3>
	<form class="" action="{{ url('/photo') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" class="form-control" name="title" required="required" placeholder="Judul Photo">
		</div>

		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" class="form-control" name="text" required="required" placeholder="Keterangan Photo">
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
			<input type="submit" class="btn btn-success" value="SIMPAN">
		</div>		
	</form>
</div>

@endsection