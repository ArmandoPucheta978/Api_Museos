<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    // public function store(Request $req){
        // if ($req->id) {
        //     $imagen = Imagen::find($req->id);
        // } else {
        //     $imagen = new Imagen();
        // }
    //     $imagen->ruta = $req->ruta;
    //     $imagen->save();
    //     return redirect()->route('imagenes');
    // }

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

    public function store(Request $req)
    {
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$req->image->extension();

        // Almacenar la imagen en DigitalOcean Spaces
        Storage::disk('do')->put($imageName, file_get_contents($req->image->getPathName()), 'public');

        // Guardar la ruta en la base de datos
        if ($req->id) {
            $imagen = Imagen::find($req->id);
        } else {
            $imagen = new Imagen();
        }
        $imagen->ruta = $req->ruta;
        $imagen->save();

        return response()->json(['success' => 'Image uploaded successfully.']);
    }

    public function show($id)
    {
        $image = Imagen::findOrFail($id);

        // Obtener la URL de la imagen desde DigitalOcean Spaces
        $spaceUrl = env('SPACES_ENDPOINT');
        $bucketName = env('SPACES_BUCKET');
        $imagePath = $image->path;

        // Construir la URL
        $url = "{$spaceUrl}/{$bucketName}/{$imagePath}";

        return response()->json(['url' => $url]);
    }
}