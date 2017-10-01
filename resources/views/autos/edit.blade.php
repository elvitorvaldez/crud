@extends('app')
@section('content')
<div class="content">
<div class="card" style="width: 30rem;">
<h3 class="card-header">Editar Auto</h3>
  <div class="card-body">    
  	
    <form name="editar" method="post" action="{{ url('/autos/update') }}">
    	{{ csrf_field() }}
    	{{ method_field('PUT') }}
    	<p class="card-text"></p><input type="hidden" name="id" value="{{ $auto->id  }}"></p>
        <p class="card-text"><label style="padding-left: 2%" for="marca">Marca:   </label><input class="form-control" type="text" name="marca" value="{{ $auto->marca  }}"></p>
        <p class="card-text"><label style="padding-left: 2%" for="modelo">Modelo: </label><input class="form-control" type="text" name="modelo" value="{{ $auto->modelo  }}"></p>

        <div class="card-footer">
        	<button type="submit" class="btn btn-info btn-xs">Guardar cambios</button>
        	<a href="{{ URL::previous() }}" class="btn btn-danger btn-xs">Cancelar</a>
        </div> 

    </form>
  </div>
</div>
</div>
@endsection