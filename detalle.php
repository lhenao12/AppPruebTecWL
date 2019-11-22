
<?php

function mostrarDetJugadores(){

 $detalleurl = $_POST['detalleURL'];

 echo  $detalleurl;


$dataFile = file_get_contents($detalleurl);
$array = json_decode($dataFile,true);

 echo "</br>" ."</br>";
 //print_r($array);


echo " <div class='container', style='background: blue-sky;'>
 <h1>Detalle Jugador NBA </h1>
<table class='table table-bordered'>
  <thead>
    <tr>
      <th scope='col'>Id</th>
      <th scope='col'>Nombre</th>
	  	<th scope='col'>Alt.en Pies</th>
	    <th scope='col'>Alt.en Pulgadas</th>
      <th scope='col'>Apellido</th>
		<th scope='col'>Posicion</th>
	  	<th scope='col'>Datos Equipo</th>
	   <th scope='col'>Peso</th>
	    <th scope='col'>Almacenar</th>
    </tr>
  </thead>
  	<tbody>";

	global $jugador;


	echo '<tr>';


	foreach($array as $posicion=>$jugador)
	{
	echo '<td>'.$jugador .'</td>';
	}
	$detalle = "<form class='form-inline' action='detalle.php' method='post'>
  		<input type='hidden' name='id' value='".$array["id"]."'/>
		<input type='hidden' name='nombre' value='".$array["first_name"]."'/>
		<input type='hidden' name='AlturaPies' value='".$array["height_feet"]."'/>
		<input type='hidden' name='AlturaPulg' value='".$array["height_inches"]."'/>
		<input type='hidden' name='Apellido' value='".$array["last_name"]."'/>
		<input type='hidden' name='posicion' value='".$array["position"]."'/>
		<input type='hidden' name='DatEquipo' value='".$array["team"]."'/>
		<input type='hidden' name='PesoLibras' value='".$array["weight_pounds"]."'/>
		<button type = 'submit' name ='submit' class='btn btn-primary my-1'>Agregar Jugador</button>
		</form>";
	echo"<td>".$detalle."</td>";

	echo '</tr>';
echo   "<tbody>
		</table>
		</div>";
}


?>

 <!doctype html>
 <html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <title>Detalle WS Jugador NBA!</title>
 </head>
 <body>


 <?php mostrarDetJugadores(); ?>

<div class="container">
 <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Código</label>
      <input type="text" class="form-control" id="codigo" placeholder="Codigo" value="<?php $_POST['id']?>"/>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre"value="<?php $_POST['nombre']?>"/>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Altura en Pies</label>
    <input type="text" class="form-control" id="altura1" placeholder="Altura medida en pies" value="<?php $_POST['AlturaPies']?>"/>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Altura en Pulg.</label>
    <input type="text" class="form-control" id="altura2" placeholder="Altura medida en pies" value="<?php $_POST['AlturaPulg']?>"/>
  </div>
    <div class="form-group">
    <label for="inputAddress2">Datos del Equipo</label>
    <input type="text" class="form-control" id="datosequipo" placeholder="Datos del equipo" value="<?php $_POST['DatEquipo']?>"/>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Apellido</label>
      <input type="text" class="form-control" id="apellido" value="<?php $_POST['Apellido']?>"/>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Posicion de Juego</label>
      <input type="text" class="form-control" id="posicion" value="<?php $_POST['posicion']?>"/>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Peso </label>
      <input type="text" class="form-control" id="peso" value="<?php $_POST['peso']?>"/>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

 </div>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
