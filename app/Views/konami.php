<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Konami</title>
</head>
<body background="<?php echo base_url();?>/fondo.jpg">
  <div class="container">
    <button class="bt btn-danger">
      <h1>CRUD KONAMI</h1>
    </button>
    <h3 style="color: white;">Agregar un videojuego</h3>
    <div class="row">
      <div class="col-sm-12" >
        <form method="POST" action="<?php echo base_url().'/crear' ?>">
          <label style="color: white;" for="nombre">Videojuego</label>
          <input type="text" name="Videojuego" id="Videojuego" class="form-control">
          <label style="color: white;" for="tipo">Tipo</label>
          <input type="text" name="Tipo" id="Tipo" class="form-control">
          <label style="color: white;" for="fecha1">Fecha de Lanzamiento</label>
          <input type="date" name="Fecha_lanzamiento" id="Fecha_lanzamiento" class="form-control">
          <label style="color: white;" for="desc">Descripción</label>
          <input type="text" name="Descripcion" id="Descripcion" class="form-control">
          <br>
          <button class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
    <hr>
    <h2 style="color: white;">Listado de videojuegos</h2>
    <div class="row">
      <div class="col-sm-12">
        <div class="table table-responsive">
          <table class="table table-hover table-bordered">
            <tr>
              <th>ID</th>
              <th>Videojuego</th>
              <th>Tipo</th>
              <th>Fecha de lanzamiento</th>
              <th>Descripción</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
            <?php foreach($datos as $key): ?>
              <tr>
                <td><?php echo $key->id_juego ?></td>
                <td><?php echo $key->Videojuego ?></td>
                <td><?php echo $key->Tipo ?></td>
                <td><?php echo $key->Fecha_lanzamiento ?></td>
                <td><?php echo $key->Descripcion ?></td>
                <td>
                  <a href="<?php echo base_url().'/obtener/'.$key->id_juego  ?>" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>
                  <a href="<?php echo base_url().'/eliminar/'.$key->id_juego  ?>" class="btn btn-danger btn-sm"> Eliminar</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
      let mensaje = '<?php echo $mensaje ?>';

      if (mensaje =='1'){
        swal(':D','Agregado con exito','success');

      }else if(mensaje == '0'){
        swal(':(','Fallo al agregar','error');  
      }else if(mensaje == '2'){
        swal(':D','Actualizado con exito','success');  
      }else if(mensaje == '3'){
        swal(':D','Fallo al actualizar','error');  
      } else if(mensaje == '4'){
        swal(':D','Eliminado con exito','success');  
      }else if(mensaje == '5'){
        swal(':D','Fallo al eliminar','error');  
      }
    </script>
</body>
</html>