<?php
//ESTE ES EL MODELO
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    //Aquí se ponen las validaciones
    static $rules=[
        'title'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
        'end'=>'required'
    ];
    //Distingue los datos que se trabajan
    //protected $fillable=['title','descripcion', 'start', 'end'];
    protected $fillable=['title','descripcion', 'start', 'end'];
}
