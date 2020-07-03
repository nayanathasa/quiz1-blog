@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Daftar Post</h3>
  <a class="btn btn-success" href="{{ url('post/create') }}">Tambah Data</a>
    <div class="row justify-content-center">
        @foreach($rows as $row)
        <div class="col-md-6">
            <div class="card mt-3 mb-3">
                <div class="card-header">
                    {{ $row->title }}
                    {{ $row->created_at->diffForHumans() }}
                    </div>

                <div class="card-body">
                    <p>Slug : {{ $row->slug }}</p>
                    <p>{{ $row->text }}</p>
                    <p>Category : {{ $row->category_id }}</p>
                    <form action="{{ url('post/' . $row->id) }}" method="POST">
                      <a class="btn btn-primary ml-" href="{{ url('post/' . $row->id . '/edit') }}">Edit</a>
                      <input name="_method" type="hidden" value="DELETE">
                      @csrf
                      <button class="btn btn-danger" >Hapus</button>
                </div>
            </div>
        </div>
        @endforeach
          
    </div>
    {!! $rows->render() !!}
</div>
@endsection
