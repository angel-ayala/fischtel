<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operador;

class OperadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operadores = Operador::all();
        return view('operador.index', compact('operadores'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//         $tipos = Tipo::all();
        return view('operador.crear');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operador = $this->validate(request(), [
            'descripcion' => 'required',
            'id_origen' => 'required',
            'id_tipo' => 'required',
            'id_cliente' => 'required',
        ]);
        
        Operador::create($operador);
        
        return redirect('operadores')->with('success', 'Operador registrado');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operador = Operador::find($id);
        return view('operador.editar',compact('operador'));
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
        $operador = Operador::find($id);
        $this->validate(request(), [
            'descripcion' => 'required',
            'id_origen' => 'required',
            'id_tipo' => 'required',
            'id_cliente' => 'required',
        ]);
        
        $operador->fill(request()->all());
        $operador->save();
        
        return redirect('operadores')->with('success','Operador Actualizado.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operador = Operador::find($id);
        $operador->delete();
        
        return redirect('elementos')->with('success','Operador eliminado');
    }
}
