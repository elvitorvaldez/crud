@extends('app')
@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/autos/create') }}" role="button">Nuevo auto</a>
  
    @include('autos.partials.table')
@endsection