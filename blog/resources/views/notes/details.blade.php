@extends('plantilla')

@section('seccion')

    <h1>Detalle de nota:</h1>
    <h4>id: {{$note->id}}</h4>
    <h4>name: {{$note->name}}</h4>
    <h4>description: {{$note->description}}</h4>

@endsection