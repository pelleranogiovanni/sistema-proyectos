<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->paginate(4);

        return view('proyectos.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProjectRequest $request)
    {
        // $fields = request()->validate([

        //     'title' => 'required',
        //     'description' => 'required|min:3',
        // ], [
        //     'title.required' => 'Ingrese el título por favor' //mensaje de validación personalizado
        // ]);


        //Almacenar
        // Project::create([
        //     'title' => request('title'), //mediante la funcion request asigno lo que envio por formulario al campo de la BD
        //     'description' => request('description')
        // ]);

        //Otra forma de almacenar con todo el request
        // Project::create(request()->all());

        //otra forma almacenando la variable despues de la validación
        // Project::create($fields);

        //Almacenar luego de pasar por el Requests
        Project::create($request->validated());

        return redirect()->route('proyectos.index')->with('status', 'Se creó correctamente el proyecto.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('proyectos.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('proyectos.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProjectRequest $request, $id)
    {
        $project = Project::find($id);

        $project->update($request->validated());

        return redirect()->route('proyectos.show', $id)->with('status', 'El proyecto fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $project = Project::find($id);
        // $project->delete();

        Project::destroy($id);

        return redirect()->route('proyectos.index')->with('status', 'El proyecto fue eliminado correctamente.');
    }
}
