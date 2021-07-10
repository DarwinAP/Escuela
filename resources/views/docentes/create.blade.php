@extends('adminlte::page')


@section('content')
<div class="container">
            
    <div class="row justify-content-center">          
        <div class="col-lg-8">
                <br>
                <form>
                        @csrf
                          <legend>Datos del Docente</legend>
                          <div class="form-group">
                           <div class="form-group">
                                  <label for="cedula">CEDULA:</label>
                                  <input type="text" class="form-control" name="cedula" required>
                                      </div>
                                <label for="nombres">NOMBRES:</label>
                                <input type="text" class="form-control" name="nombres" required>
                              </div>
                           <div class="form-group">
                                <label for="apellidos">APELLIDOS:</label>
                                <input type="text" class="form-control" name="apellidos" required>
                              </div>
                         <div class="form-group">
                                <label for="ciudad">CIUDAD:</label>
                                <input type="text" class="form-control" name="ciudad" required>
                                  </div>
                            
                         <div class="form-group">
                                <label for="direccion">DIRECCION:</label>
                                <input type="text" class="form-control" name="direccion" required>
                                     </div>
                          <div class="form-group">
                                <label for="email">EMAIL:</label>
                                <input type="text" class="form-control" name="email" required>
                                     </div>  
                           <div class="form-group">
                                 <button type="submit" class="btn btn-primary">Agregar</button>
                                  <button type="submit" class="btn btn-success">Buscar</button>
                                  <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </div>
                      
                      </form>
         </div>
     </div>>
</div>
@endsection