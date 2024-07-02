@extends('layouts.app')

@section('content')
<h1>Dati da "config/data.php": ciao</h1>
<p>This is my paragraph content.</p>
<button class="btn btn-primary">Cliccami</button>
<h2>qui ci sono i titoli dei film </h2>
<ul>
@foreach ($film as $pellicola)
<li>{{$pellicola->title}}</li>
@endforeach
</ul>

@endsection
