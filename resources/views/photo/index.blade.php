@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3>Daftar Photo</h3>
	<a class="btn btn-success" href="{{ url('photo/create') }}">Tambah Data</a>

	<table class="table table-bordered table-striped table-hover mt-2">
		<tr>
			<td>NO</td>
			<td>JUDUL</td>
			<td>KETERANGAN</td>
			<td>POST</td>
			<td>EDIT</td>
			<td>HAPUS</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->title }}</td>
			<td>{{ $row->text }}</td>
			<td>{{ $row->post_id }}</td>
			<td><a class="btn btn-primary" href="{{ url('photo/' . $row->id . '/edit') }}">Edit</a></td>
			<td>
				<form action="{{ url('photo/' . $row->id) }}" method="POST">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button class="btn btn-danger">Hapus</button>
		</form>
			</td>
		</tr>
		@endforeach
	</table>

</div>

@endsection