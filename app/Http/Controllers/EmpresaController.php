<?php

namespace App\Http\Controllers;
use App\Http\Requests\EmpresaRequest;
use Illuminate\Http\Request;
use App\Empresa;
use laracasts\flash\flash;

class EmpresaController extends Controller
{
    public function Create(){
        return view('empresa.crear');
    }
     public function store(EmpresaRequest $request){
        
        $empresa= new Empresa($request->all());
         $empresa->save();
         Flash('Se ha registrado la Empresa Existosamente');
         return redirect('/admin/empresa');
    }
    public function index(){
        $empresa= Empresa::orderBy('id','ASC')->paginate(5);
        return view('empresa.index')->with('empresa',$empresa);
    }
    public function destroy(Request $request,$id){
        try
  {
    $empresa = Empresa::findOrFail($id);

    $empresa->delete();

    flash( 'Empresa Borrada!');

    return redirect()->route('empresa.index');
  }
  catch(ModelNotFoundException $e)
  {
    flash( "La Empresa $id no pudo ser borrada!");

    return redirect()->back();
  }
    }
    public function show(Request $request ,$id){
    $empresa = Empresa::findOrFail($id);

    return view('empresa.show')->withEmpresa($empresa);
    }
    public function edit(Request $request,$id){
        $empresa=Empresa::findOrFail($id);
        return view('Empresa.edit')->with('empresa',$empresa);
        
    }
    public function update(Request $request, $id){
        $empresa= Empresa::find($id);
        $empresa->nombre=$request->nombre;
        $empresa->direccion=$request->direccion;
        $empresa->telefono=$request->telefono;
        $empresa->save();
        flash( "La Empresa ha sido actualizada correctamente");
         return redirect()->route('empresa.index');
    }
}
