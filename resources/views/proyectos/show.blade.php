@extends('layouts.main')

@section('title', $project->title)
@section('content')

<h1>{{$project->title}}</h1>

<p>{{ $project->description}}</p>

<p>{{ $project->created_at->format('d-m-Y')}}</p>

<a href="{{ route('proyectos.index') }}" class="btn btn-primary">Volver</a>

@endsection
