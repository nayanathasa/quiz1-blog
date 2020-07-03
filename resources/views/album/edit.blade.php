@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Edit Data Album</h3>
	<form action="{{ url('/album/' . $row->id) }}" method="POST">
		@method('patch')
		@csrf
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" class="form-control" name="name" required="required" value="{{ $row->name }}">
		</div>

		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" class="form-control" name="text" required="required" value="{{ $row->text }}">
		</div>	

		<div class="form-group">
			<label for="">Photo</label>
			<select name="photo_id" class="form-control">
				@foreach ($photos as $photo)
				<option value="{{ $photo->id }}"> {{ $photo->title }} </option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="UPDATE">
		</div>	
	</form>
</div>

@endsection