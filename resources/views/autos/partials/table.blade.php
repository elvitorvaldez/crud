<?php
if (isset($autos))
{print_r($autos);}
else
{echo "Vacio";}
die();
?>

<h1 class="text-primary">CRUD de Autos</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Modelo</th>    
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($autos as $auto)
        <tr>
            <td class="text-center">{{ $auto->id }}</td>
            <td class="text-center">{{ $auto->marca }}</td>
            <td class="text-center">{{ $auto->modelo }}</td>
        <td class="text-center">{{ $auto->created_at }}</td>

        {!! Form::open(['route' => ['autos.destroy', $autos->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/pasteles/'.$pastel->id.'/edit') }}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}

        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Modelo</th>
        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>