@extends('app')
@section('content')
<div class="content">
<div class="card" style="width: 30rem;">
<h3 class="card-header">Crear Auto</h3>
  <div class="card-body">    
  	
    <form name="editar" method="post" action="{{ url('autos/store') }}">
    	{{ csrf_field() }}    
    	{{ method_field('POST') }}	
        <p class="card-text"><label style="padding-left: 2%" for="marca">Marca:   </label><input class="form-control" type="text" name="marca" "></p>
        <p class="card-text"><label style="padding-left: 2%" for="modelo">Modelo: </label><input class="form-control" type="text" name="modelo" "></p>

        <div class="card-footer">
        	<button type="submit" class="btn btn-info btn-xs">Crear</button>
        	<a href="{{ URL::previous() }}" class="btn btn-danger btn-xs">Cancelar</a>
        </div> 

    </form>
  </div>
</div>
</div>
@endsection