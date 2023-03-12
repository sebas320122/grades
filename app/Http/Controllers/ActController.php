<?php

namespace App\Http\Controllers;

use App\Models\Act;
use Illuminate\Http\Request;

class ActController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id_curso = $request->input('id_curso');
        $acts = Act::where('id_curso',$id_curso)->get();
        return view('act.index', compact('acts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('act.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
            'tipo' => 'required|max:100', 
            'fecha' => 'required|max:100', 
            'calificacion' => 'required|max:100', 
            'id_curso' => 'required', 
          ]); 
          act::create($validatedData); 
        
          return redirect('/act')->with('success', 'Asignacion agregada'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $act = Act::findOrFail($id); 
        return view('act.show', compact('act')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $act = Act::findOrFail($id); 

  return view('act.edit', compact('act')); 
    }

    /**
     * Update the specified resource in storage.
     */ 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([ 
            'tipo' => 'required|max:100', 
            'fecha' => 'required|max:100', 
            'calificacion' => 'required|max:100', 
            'id_curso' => 'required', 
          ]); 
          Act::where('id_act',$id)->update($validatedData); 
        
          return redirect('/act')->with('success', 'Asignacion actualizada'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $act = Act::findOrFail($id); 
        $act->delete(); 

    return redirect('/act')->with('success', 'Asignacion eliminada'); 
    }
}
