@extends('app')

@section('content')
    <h4 class="text-center">Editar Auto: </h4>
    <form name="editar" method="post" action="{{ url('/autos/update') }}">
    	{{ csrf_field() }}
    	{{ method_field('PUT') }}
    	<input type="hidden" name="id" value="{{ $auto->id  }}">
        <label for="marca">Marca: </label><input type="text" name="marca" value="{{ $auto->marca  }}"><br>
        <label for="modelo">Modelo: </label><input type="text" name="modelo" value="{{ $auto->modelo  }}"><br><br>
        <button type="submit" class="btn btn-info btn-xs">Guardar cambios</button>
    </form>
@endsection