@extends('layouts.main')

@section('title', "Proyectos")
@section('breadcrumb', "Proyectos")
@section('content')

<h1>Proyectos</h1>

<a href="{{ route('proyectos.create') }}" class="btn btn-primary">Crear</a>
<br>
<br>

<div class="row">
    <!-- column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Proyectos Creados</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Título</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($projects as $project)
                            <tr>
                                <td>{{ $project->id}}</td>
                                <td><a href="{{ route('proyectos.show', $project)}}"> {{ $project->title}} </a></td>
                                {{-- <td>{{ $project->description}}</td>
                                <td>{{ $project->created_at->format('d-m-Y') }}</td> --}}
                            </tr>
                            @empty
                                No hay proyectos.
                            @endforelse
                        </tbody>
                    </table>
                    {{ $projects->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
