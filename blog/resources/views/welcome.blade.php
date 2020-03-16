@extends('plantilla')

@section('seccion')

<h1 class="display-4">Notas</h1>

@if (session('message'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
@endif

<form class="form-group" action="{{ route('notes.create') }}" method="POST">
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
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <input type="text" class="form-control" name="description"  value="{{ old('description') }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notes as $note)
        <tr>
            <th scope="row">{{ $note->id }}</th>
            <td>
                <a href="{{ route('notes.details',$note) }}">{{ $note->name }}</a>
            </td>
            <td>{{ $note->description }}</td>
            <td>
                <a href="{{ route('notes.edit',$note->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form class="d-inline" action="{{ route('notes.delete',$note->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </td>
        </tr> 
        @endforeach
    </tbody>
</table>

{{ $notes->links() }}

@endsection