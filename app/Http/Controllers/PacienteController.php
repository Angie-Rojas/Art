<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        //Aquí se trae la colección
        //$pacientes = Paciente::orderBy('id', 'desc')->paginate();
        $pacientes = Paciente::where('id_usuario', '=', auth()->id())->paginate();

        //return $pacientes;
        //Para pasarle la colección a una vista
        return view('menu/usuarios', compact('pacientes'));
        return view('agendar-servicio', compact('pacientes'));
    }

    public function index2(){
        //Aquí se trae la colección
        //$pacientes = Paciente::orderBy('id', 'desc')->paginate();
        $pacientes = Paciente::where('id_usuario', '=', auth()->id())->paginate();

        return view('agendar-servicio', compact('pacientes'));
    }

    public function create()
    {
        //
    }

    


    public function store(Request $request)
    {
        $usuario = new Paciente();

        $usuario -> id_usuario = auth()->id();
        $usuario -> nombre = $request->name;
        $usuario -> telefono = $request->phone;
        $usuario -> direccion = $request->address;
        $usuario -> ciudad = $request->locate;

        $usuario->save();

        return redirect('pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
