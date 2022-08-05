@extends('layouts.app')

@section('titulo', 'Detalle curso')

@section('contenido')

    <div class="text-center">
        <img style="height: 300px; width:400px" src="{{Storage::url($cursito->imagen) }}" class="card-img-top" alt="...">
        <p class="card-text">{{$cursito->description}}</p>
        <p class="card-text">{{$cursito->duracion}}</p>
        <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-info">Editar</a>
    </div>

@endsection

