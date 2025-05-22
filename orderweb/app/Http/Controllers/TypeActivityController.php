<?php

namespace App\Http\Controllers;

use App\Models\TypeActivity;
use Illuminate\Http\Request;

class typeActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeActivities = TypeActivity::all();
        
        return view('type_activity.index', compact('typeActivities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $typeActivity = TypeActivity::create($request->all());
        session()->flash('message', 'Tipo de actividad creado exitosamente');
        return redirect()->route('type_activity.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $typeActivity = TypeActivity::find($id);
        if($typeActivity){ //Si existe
            return view('type_activity.edit', compact('type_activity'));
        }
        else{
            session()->flash('warning', 'No se encontró el tipo de actividad');
        }
        return redirect()->route('type_activity.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $typeActivity = TypeActivity::find($id);
        if($typeActivity){ //Si existe
            $typeActivity->update($request->all());
            session()->flash('message', 'Tipo de actividad no encontrado');
        }
        else{
            session()->flash('warning', 'No se encontró el tipo de actividad');
        }
        return redirect()->route('type_activity.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $typeActivity = TypeActivity::find($id);
        if($typeActivity){ //Si existe
            $typeActivity->delete();
            session()->flash('message', 'Observación eliminada exitosamente');
        }
        else{
            session()->flash('warning', 'No se encontró la observación');
        }

        return redirect()->route('type_activity.index');
    }
}
