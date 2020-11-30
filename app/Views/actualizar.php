
<?php 

    $idJuego = $datos[0]['id_juego'];
    $Tipo = $datos[0]['Tipo'];
    $Videojuego = $datos[0]['Videojuego']; 
    $Fecha_lanzamiento = $datos[0]['Fecha_lanzamiento'];
    $Descripcion = $datos[0]['Descripcion'];
 ?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Actualizar un nombre</title>
</head>
<body background="<?php echo base_url();?>/fondo.jpg">

  <div class="container">
    <br>
    <button class="bt btn-danger">
      <h1>CRUD KONAMI</h1>
    </button>
    <h3 style="color: white;">Actualizar videojuego</h3>
      <div class="row">
        <div class="col-sm-12" >
          <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
            <input type="text" id="idJuego" name="idJuego" hidden="idJuego" value="<?php echo $idJuego ?>">
            <label style="color: white;" for="nombre">Videojuego</label>
            <input type="text" name="Videojuego" id="Videojuego" class="form-control" value="<?php echo $Videojuego ?>">
            <label style="color: white;" for="nombre">Tipo</label>
            <input type="text" name="Tipo" id="Tipo" class="form-control" value="<?php echo $Tipo ?>">
            <label style="color: white;" for="paterno">Fecha de lanzamiento</label>
            <input type="date" name="Fecha_lanzamiento" id="Fecha_lanzamiento" class="form-control" value="<?php echo $Fecha_lanzamiento ?>">
            <label style="color: white;" for="materno">Descripción</label>
            <input type="text" name="Descripcion" id="Descripcion" class="form-control" value="<?php echo $Descripcion ?>">
            <br>
            <button class="btn btn-warning">Actualizar</button>
          </form>
        </div>
      </div>
    </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>