<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    public function view(Request $req){
        if ($req->id) {
            $horarios = Horario::find($req->id);
        } else {
            $horarios = new Horario();
        }
        return view('/horarios', compact('horarios'));
    }

    public function store(Request $req){
        if ($req->id) {
            $horario = Horario::find($req->id); 
        } else {
            $horario = new Horario();
        }
        $horario->museo_id = $req->museo_id;
        $horario->dia_semana = $req->dia_semana;
        $horario->hora_apertura = $req->hora_apertura;
        $horario->hora_cierre = $req->hora_cierre;
        $horario->save();
        return redirect()->route('horarios');
    }

    public function storeAPI(Request $req){
        if ($req->id) {
            $horario = Horario::find($req->id); 
        } else {
            $horario = new Horario();
        }
        $horario->museo_id = $req->museo_id;
        $horario->dia_semana = $req->dia_semana;
        $horario->hora_apertura = $req->hora_apertura;
        $horario->hora_cierre = $req->hora_cierre;
        $horario->save();
        return "ok";
    }

    public function delete(Request $req){
        $horario = Horario::find($req->id);
        $horario->delete();
        return redirect()->route('horarios');
    }

    public function deleteAPI(Request $req){
        $horario = Horario::find($req->id);
        $horario->delete();
        return "ok";
    }

    public function index() {
        $horarios = Horario::all();
        return view('/horarios', compact('horarios'));
    }

    public function list(){

    }
}
