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
    $results = Auto::all();
    return View::make('autos.index')->with('autos', $results);  
  
    }
    
    public function create()
    {
        return view('autos.create'); 
    }
    
    public function store(Request $request)
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
        $result = Auto::find($id);
        return View::make('autos.edit')->with('auto', $result); 
    }
    

       public function update(Request $request)
    {
        $autos = Auto::find($request->input('id'));
        $autos->marca = $request->input('marca');
        $autos->modelo  = $request->input('modelo');
        $autos->save();
        return redirect()->route('autos.index');
    }
    
     public function destroy($id)
    {
        Auto::destroy($id);
        return redirect()->route('autos.index');
    }
}
