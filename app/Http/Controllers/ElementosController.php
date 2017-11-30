<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elemento;
use App\Tipo;
use App\Operador;

class ElementosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elementos = Elemento::with(['tipo', 'operador', 'nodoA', 'nodoB'])->get()->toArray();
        return view('elemento.index', compact('elementos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all()->toArray();
        $operadores = Operador::all()->toArray();
        $elementosa = Elemento::whereNull('elementoB')->get()->toArray();
        $elementosb = Elemento::whereNull('elementoA')->get()->toArray();
        return view('elemento.crear',compact('tipos', 'operadores', 'elementosa', 'elementosb'));
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
            'id_tipo' => 'required',
            'id_operador' => 'required',
            'nombre' => 'required', 
            'numero_serie' => 'required', 
            'descripcion' => 'required',
        ]);
        
        $elm = Elemento::create($elemento);
        
        if($request->has('elementoA') && $request->get('elementoA') != ""){
            $elmA = Elemento::find($request->get('elementoA'));
            $elmA->elementoB = $elm->id;
            $elm->elementoA = $elmA->id;
            $elmA->save();
        }
        
        if($request->has('elementoB') && $request->get('elementoB') != ""){
            $elmB = Elemento::find($request->get('elementoB'));
            $elmB->elementoA = $elm->id;
            $elm->elementoB = $elmB->id;
            $elmB->save();
        }
        
        $elm->save();
        
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
        $elemento = Elemento::with(['tipo', 'operador', 'nodoA', 'nodoB'])->find($id)->toArray();
        $tipos = Tipo::all()->toArray();
        $operadores = Operador::all()->toArray();
        
        $elementosa = Elemento::whereNull('elementoB')
            ->where('id', '!=', $elemento['elementoB'])
            ->orWhere('id', $elemento['elementoA'])->get()->toArray();
        
        $elementosb = Elemento::whereNull('elementoA')       
            ->where('id', '!=', $elemento['elementoA'])
            ->orWhere('id', $elemento['elementoB'])->get()->toArray();
        return view('elemento.editar',compact('elemento', 'id', 'tipos', 'operadores', 'elementosa', 'elementosb'));
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
        $elemento = Elemento::with(['nodoA', 'nodoB'])->find($id);
        $datos = $this->validate(request(), [
            'id_tipo' => 'required',
            'id_operador' => 'required',
            'nombre' => 'required',
            'numero_serie' => 'required',
            'descripcion' => 'required',
        ]);     
        
        $elemento->fill($datos);
        
        if($request->has('elementoA') && $request->get('elementoA') != $elemento->elementoA){
            if($request->get('elementoA') == ""){
                $nodoA = $elemento->nodoA;
                if($nodoA instanceof Elemento){
                    $nodoA->elementoB = NULL;
                    $nodoA->save();
                    $elemento->elementoA = NULL;
                }
            }
            else {
                $elemento->elementoA = $request->get('elementoA');
                $nodoA = Elemento::find($request->get('elementoA'));
                $nodoA->elementoB = $elemento->id;
                $nodoA->save();
            }
        }
        
        if($request->has('elementoB') && $request->get('elementoB') != $elemento->elementoB){
            if($request->get('elementoB') == ""){
                $nodoB = $elemento->nodoB;
                if($nodoB instanceof Elemento){
                    $nodoB->elementoA = NULL;
                    $nodoB->save();
                    $elemento->elementoB = NULL;
                }
            }
            else {
                $elemento->elementoB = $request->get('elementoB');
                $nodoB = Elemento::find($request->get('elementoB'));
                $nodoB->elementoA = $elemento->id;
                $nodoB->save();
            }
        }
        
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
        $elemento = Elemento::with(['nodoA', 'nodoB'])->find($id);
        //desasocia lado a
        if($elemento->nodoA instanceof Elemento){
            $elmA = $elemento->nodoA;
            $elmA->elementoB = NULL;
            $elmA->save();
        }
        //desasocia lado b
        if($elemento->nodoB instanceof Elemento){
            $elmB = $elemento->nodoB;
            $elmB->elementoA = NULL;
            $elmB->save();
        }
        
        $elemento->delete();
        
        return redirect('elementos')->with('success','to eliminado');
    }
}
