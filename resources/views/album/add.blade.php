@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Tambah Data Album</h3>
	<form class="" action="{{ url('/album') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" class="form-control" name="name" required="required" placeholder="Judul Album">
		</div>

		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" class="form-control" name="text" required="required" placeholder="Keterangan Album">
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
			<input type="submit" class="btn btn-success" value="SIMPAN">
		</div>
	</form>
</div>

@endsection