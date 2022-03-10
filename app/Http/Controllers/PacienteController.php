<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        //Aquí se trae la colección
        $pacientes = Paciente::paginate();

        //return $pacientes;
        //Para pasarle la colección a una vista
        return view('paciente', compact('pacientes'));
    }
}
