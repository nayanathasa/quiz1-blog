@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Edit Data Category</h3>
	<form action="{{ url('/category/' . $row->id) }}" method="POST">
		@method('patch')
		@csrf
		<div class="form-group">
			<label for="">Nama</label>
			<input type="text" class="form-control" required="required" name="name" value="{{ $row->name }}">
		</div>

		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" class="form-control" required="required" name="text" value="{{ $row->text }}">
		</div>
			
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="UPDATE">
		</div>
	</form>
</div>

@endsection