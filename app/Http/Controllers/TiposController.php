<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo::all();
        return view('tipo.index', compact('tipos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //         $tipos = Tipo::all();
        return view('tipo.crear');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = $this->validate(request(), [
            'descripcion' => 'required',
            'id_origen' => 'required',
            'id_tipo' => 'required',
            'id_cliente' => 'required',
        ]);
        
        Tipo::create($tipo);
        
        return redirect('tipos')->with('success', 'Tipo registrado');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo = Tipo::find($id);
        return view('tipo.editar',compact('tipo'));
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
        $tipo = Tipo::find($id);
        $this->validate(request(), [
            'descripcion' => 'required',
            'id_origen' => 'required',
            'id_tipo' => 'required',
            'id_cliente' => 'required',
        ]);
        
        $tipo->fill(request()->all());
        $tipo->save();
        
        return redirect('tipos')->with('success','Tipo Actualizado.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operador = Tipo::find($id);
        $operador->delete();
        
        return redirect('tipos')->with('success','Tipo eliminado');
    }
}
