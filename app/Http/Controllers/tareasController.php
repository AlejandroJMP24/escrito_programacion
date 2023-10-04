<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tareas;

class tareasController extends Controller
{
    public function crearTarea(Request $request)
    {
        try {
            $tarea = new tareas;
            $tarea->titulo = $request->input('titulo');
            $tarea->contenido = $request->input('contenido');
            $tarea->estado = $request->input('estado');
            $tarea->autor = $request->input('autor');
            $tarea->save();
            return;
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function modificarTarea(Request $request)
    {
        try {
            $tarea = tareas::where('id', $request->input('id'));
            if ($tarea != null) {
                $tarea->update([
                    'titulo' => $request->input('titulo'),
                    'contenido' => $request->input('contenido'),
                    'estado' => $request->input('estado'),
                    'autor' => $request->input('autor'),
                ]);
            }
            return;
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function eliminarTarea(Request $request)
    {
        try {
            $tarea = tareas::where('id', $request->input('id'));
            if ($tarea != null) {
                $tarea->delete();
            }
            return;
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
    public function recuperarTarea(Request $request)
    {
        try {
            $tarea = tareas::onlyTrashed()->where('id', $request->input('id'));
            if ($tarea != null) {
                $tarea->restore();
            }
            return;

        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function buscarTitulo(Request $request)
    {
        try {
            $datos = [];
            $listaTareas = tareas::where('titulo', $request->input('titulo'))->get();
            foreach ($listaTareas as $tarea) {
                $datos[] = [
                    'id' => $tarea->id,
                    'titulo' => $tarea->titulo,
                    'contenido' => $tarea->contenido,
                    'estado' => $tarea->estado,
                    'autor' => $tarea->autor,
                ];
            }
            return response()->json($datos);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }

    }
    public function buscarAutor(Request $request)
    {

    }
    public function buscarEstado(Request $request)
    {

    }
}