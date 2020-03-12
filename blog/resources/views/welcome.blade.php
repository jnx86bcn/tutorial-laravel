@extends('plantilla')

@section('seccion')
<h1 class="display-4">Notas</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notas as $nota)
        <tr>
            <th scope="row">{{ $nota->id }}</th>
            <td>{{ $nota->name }}</td>
            <td>{{ $nota->description }}</td>
            <td>@mdo</td>
        </tr> 
        @endforeach
    </tbody>
</table> 
@endsection