<?php

namespace App\Http\Controllers;


use App\Auto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


class AutosController extends Controller
{
    public function index()
    {
    $results = DB::select('select * from autos');
    return View::make('autos.index')->with('autos', $results);  
  
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
