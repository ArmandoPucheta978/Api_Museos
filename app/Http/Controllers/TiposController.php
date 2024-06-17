<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    public function view(Request $req){
        if ($req->id) {
            $tipos = Tipo::find($req->id);
        } else {
            $tipos = new Tipo();
        }
        return view('/tipos', compact('tipos'));
    }

    public function store(Request $req){
        if ($req->id){
            $tipos = Tipo::find($req->id);
        } else {
            $tipos = new Tipo();
        }
         $tipos->nombre = $req->nombre;
         $tipos->save();
         return redirect()->route('tipos');
    }

    public function storeAPI(Request $req){
        if ($req->id){
            $tipos = Tipo::find($req->id);
        } else {
            $tipos = new Tipo();
        }
         $tipos->nombre = $req->nombre;
         $tipos->save();
         return "ok";
    }

    public function delete(Request $req){
        $tipos = Tipo::find($req->id);
        $tipos->delete();
        return redirect()->route('tipos');
    }

    public function deleteAPI(Request $req){
        $tipos = Tipo::find($req->id);
        $tipos->delete();
        return "ok";
    }

    public function index(){
        $tipos = Tipo::all();
        return view('/tipos', compact('tipos'));
    }

    public function list(){
        $tipos = Tipo::all();
        return json_encode($tipos);
    }

}
