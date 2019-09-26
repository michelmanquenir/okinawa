<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Alumno;

class CreateAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rut' => ['required', Rule::unique('alumnos')->ignore($this->alumno)],
            'nombre'=> 'required',
            'apellido_paterno'=> 'required',
            'apellido_materno'=> 'required',
            'celular'=> '',
            'correo'=> '',
            'fecha_pago'=> '',
            'categoria'=> '',
        ];
    }
    
    
     public function messages()
    {
        return [
            'rut.required'=> 'El Campo Rut es Requerido',
            'rut.unique'=> 'El Rut de alumno ya esta registrado',
            'nombre.required'=> 'El campo nombre es requerido',
            'apellido_paterno.required'=> 'El campo apellido paterno es requerido',
            'apellido_materno.required'=> 'El campo apellido materno es requerido',
            'celular.required'=> 'El campo telefono es requerido',
        ];
    }
    
      public function createAlumno(){
        
        //metodo para que se ejecuten actualizacion en caso de tener dos tablas
        //transaction
        
        DB::transaction(function(){
            
            $data = $this->validated();
            
            $alumno = Alumno::create([
            'nombre'=> $data['nombre'],
            'apellido_paterno'=> $data['apellido_paterno'],
            'apellido_materno'=> $data['apellido_materno'],
            'rut'=> $data['rut'],
            'celular'=> $data['celular'],
            'correo'=> $data['correo'],
            'fecha_pago'=> $data['fecha_pago'],
            'categoria'=> $data['categoria'],
            ]);
            
        });
        //fin del metodo transaction
    }
}
