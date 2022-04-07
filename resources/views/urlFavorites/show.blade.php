@extends('template')

@section('content')

<h2>Detalle del Registro</h2>
<br>
<h4>URL: {{ $item->url}}</h4>
<h4>TITULO: {{ $item->title}}</h4>
<h4>DESCRIPCION: {{ $item->description}}</h4>
<h4>CATEGORIA: {{ $item->category}}</h4>
<h4>VISIBILIDAD: {{ $item->visibility}}</h4>


@endsection