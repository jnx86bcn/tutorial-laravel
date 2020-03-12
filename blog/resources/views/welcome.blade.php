@extends('plantilla')

@section('seccion')
<h1 class="display-4">Notas</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Handle</th>
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
            <td>@mdo</td>
        </tr> 
        @endforeach
    </tbody>
</table> 
@endsection