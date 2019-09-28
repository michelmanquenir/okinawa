<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateAlumnoRequest;
use App\{Alumno};

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $alumnos = Alumno::all();
        return view('/administrador/alumnos.indexAlumnos', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/administrador/alumnos.crearAlumnos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(CreateAlumnoRequest $request)
    {
      
      //creamos variable de la imagen
      $imagen= $request->file('imagen');
      //si trae imagen la insertamos en la carpeta imagenes perfil
      if($imagen){
          $nombre = $imagen->getClientOriginalName();
          $imagen->move('imagenes/perfil', $nombre);
          $request['imagen'] = $nombre;
      }
      
       $request->createAlumno();
      
      
      
      
        return redirect('alumnos')->with('Mensaje', 'Alumnos Creado con Exito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
         return view('/administrador/alumnos.editarAlumnos', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect('/alumnos')->with('Mensaje', 'Alumno '.$alumno->nombre.' Eliminado con Exito');
    }
}
