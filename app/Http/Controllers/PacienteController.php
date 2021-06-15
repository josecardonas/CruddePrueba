<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()



    {
        $datos['pacientes']=Paciente::paginate(5);
        return view('pacientes.index',$datos );  
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $camposformulario= [ 
        'Nombre'=> 'required|string|max:100',
        'Apellido1'=> 'required|string|max:100',
        'Apellido2'=> 'required|string|max:100',
        'NumeroIdentificacion'=> 'required|string|max:100',
        'Correo'=> 'required|email',
        'Telefono'=> 'required|string|max:12',
        'NumeroIdentificacion'=> 'required|string|max:9',
        'FechadeNacimento'=> 'required|date'

                            ];
        $mensaje= [
        'required' =>'El :attribute es requerido'
    ]

;

 $this-> validate($request,$camposformulario,$mensaje);

        $datosPaciente = request() ->except('_token');

        Paciente::insert($datosPaciente);
        //return response() -> json ($datosPaciente);

        return redirect('pacientes')  -> with('mensaje','Paciente agregado con exito');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $paciente=Paciente::findOrFail($id);
        return view('pacientes.edit',compact('paciente'));


        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $datosPaciente = request() ->except(['_token','_method']);
        Paciente::where('id','=',$id)->update($datosPaciente);

        $paciente=Paciente::findOrFail($id);
        return view('pacientes.edit',compact('paciente'));

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       /** $paciente=Paciente::findOrFail($id);
        *if(Storage::delete('public'/.$empleado->foto)) {
          *  Paciente::destroy($id);

        *}
         */
        Paciente::destroy($id);
    
        return redirect('pacientes')  -> with('mensaje','Paciente borrado con exito');

        //
    }
   


}
