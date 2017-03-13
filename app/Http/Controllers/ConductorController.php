<?php

namespace App\Http\Controllers;
use App\Http\Requests\ConductorRequest;
use Illuminate\Http\Request;
use App\Conductor;
use laracasts\flash\flash;


class ConductorController extends Controller
{
        public function __construct()
{
    $this->middleware('auth');
}
     public function Create(){
        return view('Conductor.crear');
    }
     public function store(ConductorRequest $request){
        
        $conductor= new Conductor($request->all());
         $conductor->save();
         Flash('Se ha registrado el Conductor Existosamente');
         return redirect('/admin/conductor');
    }
    public function index(){
        $conductor= Conductor::orderBy('id','ASC')->paginate(5);
        return view('conductor.index')->with('conductor',$conductor);
    }
    public function destroy(Request $request,$id){
        try
  {
    $conductor = Conductor::findOrFail($id);

    $conductor->delete();

    flash( 'Conductor Borrado!');

    return redirect()->route('conductor.index');
  }
  catch(ModelNotFoundException $e)
  {
    flash( "El conductor $id no pudo ser borrado!");

    return redirect()->back();
  }
    }
    public function show(Request $request ,$id){
    $conductor = Conductor::findOrFail($id);

    return view('conductor.show')->withConductor($conductor);
    }
    public function edit(Request $request,$id){
        $conductor=Conductor::findOrFail($id);
        return view('Conductor.edit')->with('conductor',$conductor);
        
    }
    public function update(Request $request, $id){
        $conductor= Conductor::find($id);
        $conductor->nombre=$request->nombre;
        $conductor->apellidos=$request->apellidos;
        $conductor->cédula=$request->cédula;
        $conductor->teléfono=$request->teléfono;
        $conductor->save();
        flash( "El conductor ha sido actualizado correctamente");
         return redirect()->route('conductor.index');
    }
}
