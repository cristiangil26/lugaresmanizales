<?php

namespace App\Http\Controllers;
use App\Http\Requests\TransporteRequest;
use Illuminate\Http\Request;
use App\Transporte;
use laracasts\flash\flash;

class TransporteController extends Controller
{

     public function Create(){
        return view('Transporte.crear');
    }
     public function store(TransporteRequest $request){
        
        $transporte= new Transporte($request->all());
         $transporte->save();
         Flash('Se ha registrado la Ruta Existosamente');
         return redirect('/admin/transporte');
    }
    public function index(){
        $transporte= Transporte::orderBy('id','ASC')->paginate(5);
        return view('transporte.index')->with('transporte',$transporte);
    }
    
    public function destroy(Request $request,$id){
        try
  {
    $transporte = Transporte::findOrFail($id);

    $transporte->delete();

    flash( 'Ruta Borrada');

    return redirect()->route('transporte.index');
  }
  catch(ModelNotFoundException $e)
  {
    flash( "La ruta $id no pudo ser borrada!");

    return redirect()->back();
  }
    }
    public function show(Request $request ,$id){
    $transporte = Transporte::findOrFail($id);

    return view('transporte.show')->withTransporte($transporte);
    }
    public function edit(Request $request,$id){
        $transporte=Transporte::findOrFail($id);
        return view('Transporte.edit')->with('transporte',$transporte);
        
    }
    public function update(Request $request, $id){
        $transporte= Transporte::find($id);
        $transporte->origen=$request->origen;
        $transporte->destino=$request->destino;
        $transporte->nombreRuta=$request->nombreRuta;
        $transporte->save();
        flash( "La ruta ha sido actualizada correctamente");
         return redirect()->route('transporte.index');
    }
}
