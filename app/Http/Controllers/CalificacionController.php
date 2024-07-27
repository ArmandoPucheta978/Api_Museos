<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public function view(Request $req){
    if ($req->id) {
            $calificaciones = Calificacion::find($req->id);
        } else {
            $calificaciones = new Calificacion();
        }
        return view('/calificaciones', compact('calificaciones'));
    }

    public function store(Request $req){
        if ($req->id) {
            $calificacion = Calificacion::find($req->id);
        } else {
            $calificacion = new Calificacion();
        }
        $calificacion->museo_id = $req->museo_id;
        $calificacion->puntuacion = $req->puntuacion;
        $calificacion->save();
        return redirect()->route('calificaciones');
    }

    public function storeAPI(Request $req){
        if ($req->id) {
            $calificacion = Calificacion::find($req->id);
        } else {
            $calificacion = new Calificacion();
        }
        $calificacion->museo_id = $req->museo_id;
        $calificacion->puntuacion = $req->puntuacion;
        $calificacion->save();
        return "ok";
    }

    public function delete(Request $req){
        $calificacion = Calificacion::find($req->id);
        $calificacion->delete();
        return redirect()->route('calificaciones');
    }

    public function index(){
        $calificaciones = Calificacion::all();
        return view('/calificaciones', compact('calificaciones'));
    }

    public function list(){
        
    }
}
