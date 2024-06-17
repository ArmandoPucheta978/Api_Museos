<?php

namespace App\Http\Controllers;

use App\Models\TipoMuseo;
use Illuminate\Http\Request;

class TipoMuseoController extends Controller
{
    public function view(Request $req){
        if ($req->id) {
            $tipom = TipoMuseo::find($req->id);
        } else {
            $tipom = new TipoMuseo();
        }
        return view('/TipoMuseo', compact('tipom'));
    }

    public function store(Request $req){
        if ($req->id) {
            $tipom = TipoMuseo::find($req->id);
        } else {
            $tipom = new TipoMuseo();
        }
        $tipom->museo_id = $req->museo_id;
        $tipom->tipo_id = $req->tipo_id;
        $tipom->save();
        return redirect()->route('tipomuseos');
    }

    public function storeAPI(Request $req){
        if ($req->id) {
            $tipom = TipoMuseo::find($req->id);
        } else {
            $tipom = new TipoMuseo();
        }
        $tipom->museo_id = $req->museo_id;
        $tipom->tipo_id = $req->tipo_id;
        $tipom->save();
        return "ok";
    }

    public function delete(Request $req){
        $tipom = TipoMuseo::find($req->id);
        $tipom->delete();
        return redirect()->route('tipomuseos');
    }

    public function deleteAPI(Request $req){
        $tipom = TipoMuseo::find($req->id);
        $tipom->delete();
        return "ok";
    }

    public function index() {
        $tipom = TipoMuseo::all();
        return view('/TipoMuseo', compact('tipom'));
    }

    public function list() {

    }

}
