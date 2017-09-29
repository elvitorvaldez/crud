<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;

class AutosController extends Controller
{
    public function index()
    {
     $autos = Auto::all();
      return view('autos.index')->with('autos', $autos);  
    }
    
    public function create()
    {
        return view('autos.create'); 
    }
    
    public function store()
    {
        $autos = new Auto;
        $autos->marca = $request->input('marca');
        $autos->modelo  = $request->input('modelo');

        $autos->save();

        return redirect()->route('autos.index');
    }
    
    public function show()
    {
        
    }
    
   public function edit($id)
    {
        $autos = Auto::find($id);
        return view('autos.edit')->with('autos',$autos);
    }
    
   public function update(Request $request, $id)
    {
        $autos = Auto::find($id);
        $autos->nombre = $request->input('marca');
        $autos->sabor  = $request->input('modelo');
        $autos->save();
        return redirect()->route('autos.index');
    }
    
     public function destroy($id)
    {
        Auto::destroy($id);
        return redirect()->route('autos.index');
    }
}
