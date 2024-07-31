<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Imagen;
use App\Models\Museo;
use App\Models\Tipo;
use App\Models\TipoMuseo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MuseoController extends Controller
{
    public function view(Request $req){
        if ($req->id) {
            $museos = Museo::find($req->id);
            return view('nuevo.museo', compact('tipos'));
        } else {
            $museos = new Museo();
        }
        $tipos = Tipo::all();
        return view('/museo', compact('museos', 'tipos'));
        //return view('/museo')->with('museos', $museos);
    }

    public function storeAll(Request $req){
        $req->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'ciudad' => 'required',
            'pais' => 'required',
            'ubicacion' => 'required',
            'contacto' => 'required',
            'sitio_web' => 'required|url',
            'costo_entrada' => 'required|numeric',
            'tipos' => 'required|array',
            'tipos.*' => 'integer|exists:tipos,id',
            'horarios' => 'required|array',
            'horarios.*.dia_semana' => 'required',
            'horarios.*.hora_apertura' => 'required',
            'horarios.*.hora_cierre' => 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if($req->id){
            $museo = Museo::find($req->id);
        } else {
            $museo = new Museo();
        }

        $museo->nombre = $req->nombre;
        $museo->ubicacion = $req->ubicacion;
        $museo->ciudad = $req->ciudad;
        $museo->pais = $req->pais;
        $museo->costo_entrada = $req->costo_entrada;
        $museo->descripcion = $req->descripcion;
        $museo->contacto = $req->contacto;
        $museo->sitio_web = $req->sitio_web;
        $museo->save();
        //$museoID = $museo->id;
        foreach ($req->horarios as $horario) {
            $museo->horarios()->create($horario);
        }
        //Tipos
        $museo->tipos()->sync($req->tipos);

        //Imágenes
        if ($req->hasFile('images')) {
            foreach ($req->file('images') as $image) {
                $path = $image->store('public/images');
                $museo->imagenes()->create([
                    'ruta' => basename($path)
                ]);
            }
        }

        // $images = $req->file('images');
        //     foreach ($images as $image) {
        //     // Definir el nombre del archivo
        //     $fileName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
        //     // Subir la imagen a DigitalOcean Spaces
        //     $path = Storage::disk('spaces')->put($fileName, file_get_contents($image->getPathName()), 'public');
        //     // Obtener la URL de la imagen subida
        //     $url = env('SPACES_ENDPOINT') . '/' . $path;
        //       $museo->imagenes()->create([
        //       'ruta' => basename($url),
        //        ]);
        //     }
        return redirect()->route('museos');
    }

    public function store(Request $req){
        if ($req->id) {
            $museo = Museo::find($req->id);
        } else {
            $museo = new Museo();
        }
        $museo->nombre = $req->nombre;
        $museo->ubicacion = $req->ubicacion;
        $museo->ciudad = $req->ciudad;
        $museo->pais = $req->pais;
        $museo->costo_entrada = $req->costo_entrada;
        $museo->descripcion = $req->descripcion;
        $museo->contacto = $req->contacto;
        $museo->sitio_web = $req->sitio_web;
        $museo->save();
        return redirect()->route('museos');
    }
    
    public function storeAPI(Request $req){
        if ($req->id) {
            $museo = Museo::find($req->id);
        } else {
            $museo = new Museo();
        }
        $museo->nombre = $req->nombre;
        $museo->ubicacion = $req->ubicacion;
        $museo->ciudad = $req->ciudad;
        $museo->pais = $req->pais;
        $museo->costo_entrada = $req->costo_entrada;
        $museo->descripcion = $req->descripcion;
        $museo->contacto = $req->contacto;
        $museo->sitio_web = $req->sitio_web;
        $museo->save();
        return "ok";
    }
    
    public function delete(Request $req){
        $museo = Museo::find($req->id);
        $museo->delete();
        return redirect()->route('museos');
    }

    public function deleteAPI(Request $req){
        $museo = Museo::find($req->id);
        $museo->delete();
        return "ok";
    }

    public function index(){
        // $museos = Museo::all();
        $museos = Museo::with(['tipos', 'imagenes'])->get();
        return view('/museos', compact('museos'));
    }

    public function list(){
        $museos = Museo::with(['tipos', 'imagenes','horarios','calificaciones'])->get();
        $museos = $museos->map(function ($museo) {
            return [
                'museo_id' => $museo->id,
                'museo_nombre' => $museo->nombre,
                'descripcion' => $museo->descripcion,
                'direccion' => $museo->ubicacion,
                'telefono' => $museo->contacto,
                'website' => $museo->website,
                'costo_entrada' => $museo->costo_entrada,
                'latitud' => $museo->latitud,
                'longitud' => $museo->longitud,
                'tipos' => $museo->tipos->map(function ($tipo) {
                    return [
                        'tipo_id' => $tipo->id,
                        'tipo_nombre' => $tipo->nombre,
                    ];
                }),
                'imagenes' => $museo->imagenes->map(function ($imagen) {
                    return [
                        'imagen_id' => $imagen->id,
                        'imagen_ruta' => $imagen->ruta,
                    ];
                }),
                'horarios' => $museo->horarios->map(function ($horario) {
                    return [
                        'horario_id' => $horario->id,
                        'dia' => $horario->dia_semana,
                        'hora_apertura' => $horario->hora_apertura,
                        'hora_cierre' => $horario->hora_cierre,
                    ];
                }),
                'calificaciones' => $museo->calificaciones->map(function ($calificacion) {
                    return [
                        'calificacion_id' => $calificacion->id,
                        'puntuacion' => $calificacion->puntuacion,
                    ];
                }),
            ];
        });
        return json_encode($museos);
    }

}