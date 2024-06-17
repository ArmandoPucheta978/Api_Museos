<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function view(Request $req){
        if ($req->id) {
            $imagenes = Imagen::find($req->id);
        } else {
            $imagenes = new Imagen();
        }
        return view('/imagenes', compact('imagenes'));
    }

    public function store(Request $req){
        if ($req->id) {
            $imagen = Imagen::find($req->id);
        } else {
            $imagen = new Imagen();
        }
        $imagen->ruta = $req->ruta;
        $imagen->save();
        return redirect()->route('imagenes');
    }

    public function storeAPI(Request $req){
        if ($req->id) {
            $imagen = Imagen::find($req->id);
        } else {
            $imagen = new Imagen();
        }
        $imagen->ruta = $req->ruta;
        $imagen->save();
        return "ok";
    }

    public function delete(Request $req){
        $imagen = Imagen::find($req->id);
        $imagen->delete();
        return redirect()->route('imagenes');
    }

    public function deleteAPI(Request $req){
        $imagen = Imagen::find($req->id);
        $imagen->delete();
        return "ok";
    }

    public function index(){
        $imagenes = Imagen::all();
        return view('/imagenes', compact('imagenes'));
    }

    public function list(){

    }
}