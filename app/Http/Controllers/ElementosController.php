<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elemento;
use App\Tipo;

class ElementosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elementos = Elemento::all();
        return view('elemento.index', compact('elementos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();
        return view('elemento.crear',compact('tipos'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $elemento = $this->validate(request(), [
            'descripcion' => 'required',
            'id_origen' => 'required',
            'id_tipo' => 'required',
            'id_cliente' => 'required',
        ]);
        
        Elemento::create($elemento);
        
        return redirect('elementos')->with('success', 'Elemento registrado');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elemento = Elemento::find($id);
        return view('elemento.editar',compact('elemento'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $elemento = Elemento::find($id);
        $this->validate(request(), [
            'descripcion' => 'required',
            'id_origen' => 'required',
            'id_tipo' => 'required',
            'id_cliente' => 'required',
        ]);
        
        $elemento->fill(request()->all());
        $elemento->save();
        
        return redirect('elementos')->with('success','Elemento Actualizado.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $elemento = Elemento::find($id);
        $elemento->delete();
        
        return redirect('elementos')->with('success','to eliminado');
    }
}
