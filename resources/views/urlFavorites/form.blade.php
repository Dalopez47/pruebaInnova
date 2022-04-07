<div class="col-md-6">
    <label for="url" class="form-label">URL</label>
    <input type="text" class="form-control" name="url" value="{{$data->url}}" id="url">
  </div>
  <div class="col-md-6">
    <label for="title" class="form-label">TITULO</label>
    <input type="text" class="form-control" name="title" value="{{$data->title}}" id="title">
  </div>
  <div class="col-12">
    <label for="description" class="form-label">DESCRIPCION</label>
    <input type="text" class="form-control" name="description" value="{{$data->description}}" id="description" rows="3">
  </div>
  <div class="col-12">
    <label for="category" class="form-label">CATEGORIA</label>
    <input type="text" class="form-control" name="category" value="{{$data->category}}" id="category" >
  </div>
 
  <div class="col-md-4">
    <label for="visibility" class="form-label">VISIBILIDAD</label>
    <select name="visibility" value="{{$data->visibility}}" id="visibility" class="form-select">
      <option selected>Publico</option>
      <option selected>Privado</option>      
    </select>
  </div>
  
  
  <div class="col-12">
    <button type="submit" value="save" class="btn btn-primary">Guardar Datos</button>
  </div>