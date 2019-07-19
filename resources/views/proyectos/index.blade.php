@extends('layouts.main')

@section('title', "Proyectos")
@section('breadcrumb', "Proyectos")
@section('content')

<h1>Proyectos</h1>

<a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-rounded"><i class="fa fa-edit"></i> Crear</a>
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


{{-- boto modal --}}
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#responsive-modal" data-whatever="@mdo">Modal</button>
{{-- Moda --}}
<div class="col-md-4">
    <div class="card">
        <div class="card-body">

            <!-- sample modal content -->
            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></button>
                            <h4 class="modal-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">El contenido modal es responsivo</font></font></h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal form-material" method="POST" action="{{ route('proyectos.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recipiente:</font></font></label>
                                    <<input type="text"  class="form-control form-control-line" name="title" value="{{old('title')}}">
                                    <p class="text-danger">{{$errors->first('title')}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mensaje:</font></font></label>
                                    <textarea rows="5" class="form-control form-control-line"  name="description" value="{{old('description')}}"></textarea>
                    <p class="text-danger">{{$errors->first('description')}}</p>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cerrar</font></font></button>
                            <button type="submit" class="btn btn-success btn-rounded"><i class="fa fa-check"></i> Guardar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
