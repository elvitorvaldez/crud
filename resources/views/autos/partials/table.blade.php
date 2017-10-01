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
  
            <td class="text-center">
                <a href="{{ action('AutosController@destroy', $auto->id) }}" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true">Borrar</span>
                </a>
                <a href="{{ url('/autos/'.$auto->id.'/edit') }}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span>
                </a>
            </td>


        </tr>
    @endforeach
  </tbody>
</table>


