<?php

namespace App\Http\Controllers;
use App\Models\Direccione;

use Illuminate\Http\Request;

class DireccionesController extends Controller
{
    public function index(){
        //Aquí se trae la colección
        //$direcciones = Direccione::where('id_usuario', '=', auth()->id())->paginate();
        $direcciones = Direccione::all();

        //Para pasarle la colección a una vista 👀
        return view('menu/direcciones', compact('direcciones'));

        return view('menu/direcciones');
    }

    public function store(Request $request)
    {
        $direccion = new Direccione();

        $direccion -> id_usuario = auth()->id();
        $direccion -> nombre = $request->name;
        $direccion -> direccion = $request->phone;
        $direccion -> localidad = $request->address;+

        $direccion->save();

        return redirect('pacientes');
    }
}
