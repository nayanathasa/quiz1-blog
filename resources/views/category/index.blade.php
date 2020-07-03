@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3>Daftar Category</h3>
	<a class="btn btn-success" href="{{ url('category/create') }}">Tambah Data</a>

	<table class="table table-bordered table-striped table-hover mt-2">
		<tr>
			<td>NO</td>
			<td>NAMA</td>
			<td>KETERANGAN</td>
			<td>EDIT</td>
			<td>HAPUS</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->name }}</td>
			<td>{{ $row->text }}</td>
			<td><a class="btn btn-primary" href="{{ url('category/' . $row->id . '/edit') }}">Edit</a></td>
			<td>
				<form action="{{ url('category/' . $row->id) }}" method="POST">
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