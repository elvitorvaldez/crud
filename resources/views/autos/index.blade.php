@extends('app')
@section('content') 

<h1 class="text-primary">Control de Autos</h1>
    <a class="btn btn-success pull-right" href="{{ url('/autos/create') }}" role="button">Nuevo auto</a>
 
    @include('autos.partials.table')

@endsection