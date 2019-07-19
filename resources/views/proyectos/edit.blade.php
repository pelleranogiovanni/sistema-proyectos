@extends('layouts.main')

@section('content')

<h1>Editar Proyecto: {{$project->title}}</h1>


<div class="col-lg-8 col-xlg-9 col-md-7">
    <div class="card">
        <div class="card-block">
        <form class="form-horizontal form-material" method="POST" action="{{ route('proyectos.update', $project) }}">
            @csrf @method('PATCH')
                <div class="form-group">
                    <label class="col-md-12">Título</label>
                    <div class="col-md-12">
                    <input type="text"  class="form-control form-control-line" name="title" value="{{ old('title', $project->title) }}">
                        <p class="text-danger">{{$errors->first('title')}}</p>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label class="col-md-12">Autor</label>
                    <div class="col-md-12">
                    <input type="text"  class="form-control form-control-line" name="autor" value="{{old('autor')}}">
                        {{$errors->first('autor')}}
                    </div>
                </div> --}}
                {{-- <div class="form-group">
                    <label for="example-email" class="col-md-12">Email</label>
                    <div class="col-md-12">
                    <input type="email" class="form-control form-control-line" name="email" id="example-email" value="{{old('email')}}">
                        {{$errors->first('email')}}
                    </div>
                </div> --}}
                <div class="form-group">
                    <label class="col-md-12">Descripción</label>
                    <div class="col-md-12">
                    <input class="form-control form-control-line"  name="description" value="{{ old('description', $project->description) }}">

                        <p class="text-danger">{{$errors->first('description')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success btn-rounded"><i class="fa fa-check"></i> Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

