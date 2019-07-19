@extends('layouts.main')

@section('title', $project->title)
@section('content')


<h1>{{$project->title}}</h1>

<p>{{ $project->description}}</p>

<p>{{ $project->created_at->format('d-m-Y')}}</p>

<a href="{{ route('proyectos.index') }}" class="btn btn-primary btn-rounded"><i class="fa fa-arrow-circle-left"></i> Volver</a>
<a href="{{ route('proyectos.edit', $project)}}" class="btn btn-success btn-rounded"><i class="fa fa-edit"></i> Editar</a>

<a href="{{route('proyectos.destroy', $project->id)}}" class="btn btn-danger btn-rounded"><i class="fa fa-trash" onclick="return confirm('¿Seguro desea borrar {{$project->title}}?')"></i> Eliminar</a>


@endsection
