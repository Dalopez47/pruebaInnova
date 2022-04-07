@extends('template')

@section('content')

<h3>Ingresa Un Nuevo Registro</h3><br>



<form class="row g-3" action="{{url('urlFavorites')}}" method="POST" >
@csrf
<div class="col-md-6">
    <label for="url" class="form-label">URL</label>
    <input type="text" class="form-control" name="url"  id="url" required>
  </div>
  <div class="col-md-6">
    <label for="title" class="form-label">TITULO</label>
    <input type="text" class="form-control" name="title"  id="title" required>
  </div>
  <div class="col-12">
    <label for="description" class="form-label">DESCRIPCION</label>
    <input type="text" class="form-control" name="description"  id="description" required>
  </div>
  <div class="col-12">
    <label for="category" class="form-label">CATEGORIA</label>
    <input type="text" class="form-control" name="category"  id="category" required>
  </div>
 
  <div class="col-md-4">
    <label for="visibility" class="form-label">VISIBILIDAD</label>
    <select name="visibility" id="visibility" class="form-select">
      <option selected>Publico</option>
      <option selected>Privado</option>      
    </select>
  </div>
  
  
  <div class="col-12">
    <button type="submit" value="save" class="btn btn-primary">Guardar Datos</button>
  </div>

  
</form>


@endsection