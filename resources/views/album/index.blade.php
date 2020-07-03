@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3>Daftar Album</h3>
	<a class="btn btn-success" href="{{ url('album/create') }}">Tambah Data</a>

	<table class="table table-bordered table-striped table-hover mt-2">
		<tr>
			<td>NO</td>
			<td>JUDUL</td>
			<td>KETERANGAN</td>
			<td>PHOTO</td>
			<td>EDIT</td>
			<td>HAPUS</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->name }}</td>
			<td>{{ $row->text }}</td>
			<td>{{ $row->photo_id }}</td>
			<td><a class="btn btn-primary" href="{{ url('album/' . $row->id . '/edit') }}">Edit</a></td>
			<td>
				<form action="{{ url('album/' . $row->id) }}" method="POST">
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