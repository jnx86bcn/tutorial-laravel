@extends('plantilla')

@section('seccion')

    @if (session('message'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
    @endif

    <form action="{{ route('notes.update',$note->id) }}" method="POST">
        @method('PUT')
        @csrf
        @error('name')
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Name field is compulsary
        </div>
        @enderror
        @error('description')
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Description field is compulsary
        </div>
        @enderror
        <h1>Editar nota {{ $note->id }}</h1>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{ $note->name }}">
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" class="form-control" name="description"  value="{{ $note->description }}">
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection