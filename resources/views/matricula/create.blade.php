
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
  
  @extends('adminlte::page')


@section('content')
<div class="container">
            
    <div class="row justify-content-center">          
        <div class="col-lg-8">
                <br>
                <form action="" method="POST" enctype="multipart/form-data">
                {{@csrf_field()}}
                          <legend>Matriculacion del estudiante</legend>
                         
                          <div class="form-group">
                                  <label for="cedula">CEDULA:</label>
                                  <input type="text" class="form-control" name="cedula" required>
                                      </div>
                           <div class="form-group">
                                <label for="nombres">NOMBRES:</label>
                                <input type="text" class="form-control" name="nombres" required>
                              </div>
                              <div class="form-group">
                                <label for="apellidos">APELLIDOS:</label>
                                <input type="text" class="form-control" name="apellidos" required>
                              </div>
                         

                         <div class="form-group">
                              <label for="sexo">SEXO:</label>
                              <select class="form-control" name="sexo" required>
                                      <option></option>
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
                                <label for="nombre del representante">NOMBRE DEL REPRESENTANTE:</label>
                                <input type="text" class="form-control" name="nombre del representante" required>
                                    </div>  
                         <div class="form-group">
                                <label for="cedula del representante">CEDULA DEL REPRESENTANTE:</label>
                                <input type="text" class="form-control" name="cedula del representante" required>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

