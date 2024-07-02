@extends('layouts.app')

@section('content')
<h1>...mentre qui c'è la lista dei dati dei film </h1>
@foreach ($film  as $item)
    <p>{{$item}}</p>
@endforeach
@endsection