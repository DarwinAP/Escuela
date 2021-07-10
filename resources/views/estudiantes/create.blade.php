@extends('adminlte::page')


@section('content')
<div class="container">
            
    <div class="row justify-content-center">          
        <div class="col-lg-8">
  
        <form action="{{route('estudiantes.create')}}" method="POST">
                        {{@csrf_field()}}
                          <legend>datos del estudiante</legend>
                          <div class="form-group">
                           <div class="form-group">
                                  <label for="cedula">CEDULA:</label>
                                  <input type="text" class="form-control" name="cedula" required>
                                   </div>
                                <label for="nombres">NOMBRES:</label>
                                <input type="text" name="nombres" class="form-control" required>
                              </div>
                              <div class="form-group">
                                <label for="apellidos">APELLIDOS:</label>
                                <input type="text" class="form-control" name="apellidos" required>
                              </div>
                         <div class="form-group">
                              <label for="sexo">SEXO:</label>
                              <select class="form-control" name="sexo" required>
                                      <option>seleccionar</option>
                                      <option>FEMENINO</option>
                                      <option>MASCULINO</option>
                              </select>
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
                            <button type="submit" class="btn btn-primary">Agregar</button>
                                     </div>
                                
                      
                      </form>
         </div>
     
</div>
</div>
<table class="table table-bordered">
 <thead>
   <tr>
     <th>CEDULA</th>
     <th>NOMBRES</th>
     <th>APELLIDOS</th>
     <th>SEXO</th>
     <th>CIUDAD</th>
     <th>DIRECCION</th>
     <th>ACCIONES</th>

   </tr>
 </thead>
 <tbody>
    @foreach ($estudiantes as $estudiante)
    <tr>
   <td>{{$estudiante-> cedula}}</td>
   <td>{{$estudiante-> nombres}}</td>
   <td>{{$estudiante-> apellidos}}</td>
   <td>{{$estudiante-> sexo}}</td>
   <td>{{$estudiante-> ciudad}}</td>
   <td>{{$estudiante-> direccion}}</td>
    </tr>
    @endforeach
 </tbody>
</table>
@endsection