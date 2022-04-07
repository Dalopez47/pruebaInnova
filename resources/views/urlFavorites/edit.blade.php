@extends('template')

@section('content')

<form action="{{url('urlFavorites',$data)}}" method="POST" class="row g-3" >
@csrf
{{method_field('PATCH')}}
@include('urlFavorites.form')

</form>

@endsection