@extends('template')

@section('content')

<h1>Listado de Favoritos de {{ Auth::user()->name }} </h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                <div class="header d-flex justify-content-between ">
                    <a href="{{url('urlFavorites/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>
                </div><br>

                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" hidden>#</th>
                            <th scope="col">URL</th>
                            <th scope="col">TITULO</th>
                            <th scope="col">DESCRIPCION</th>
                            <th scope="col">CATEGORIA</th>
                            <th scope="col">VISIBILIDAD</th>
                            <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach( $favorites as $item )
                           <tr>
                            <td hidden>{{ $item->id }}</td>
                            <td>
                                <a href="{{ route('urlFavorites.show',$item->id) }}">                                
                                    {{ $item->url}}
                                </a>                                
                            </td>
                            <td>{{ $item->title}}</td>
                            <td>{{ $item->description}}</td>
                            <td>{{ $item->category}}</td>
                            <td>{{ $item->visibility}}</td>
                            <td>
                                <a href="{{url('/urlFavorites/'.$item->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a>
                                 
                                <form action="{{url('/urlFavorites/'.$item->id)}}"
                                method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Quieres Borrar el Registro')"
                                 value="Borrar">
                                </form>
                            </td>
                            </tr>                           
                           @endforeach

                        </tbody>
                    </table>
                    {!! $favorites->links() !!}
        </div>
    </div>
</div>

@endsection