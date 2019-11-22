
<?php

function mostrarJugadores(){

(int) $pesoJugador = $_POST['peso'];
$posicionJugador = $_POST['posicion'];

$dataFile = file_get_contents("https://www.balldontlie.io/api/v1/players");
$array = json_decode($dataFile,true);

echo " <div class='container', style='background: blue-sky;'>
 <h1>Listado Jugadores </h1>
<table class='table table-bordered'>
  <thead>
    <tr>
      <th scope='col'>Id</th>
      <th scope='col'>Nombre</th>
      <th scope='col'>Apellido</th>
      <th scope='col'>Posicion</th>
	   <th scope='col'>Peso</th>
	    <th scope='col'>Detalle</th>
    </tr>
  </thead>
  	<tbody>";

	global $id;

for($i=0;$i<count($array["data"]);$i++){
	$id = $array["data"][$i]["id"];
    $nombre = $array["data"][$i]["first_name"];
    $apellido = $array["data"][$i]["last_name"];
	$posicion = $array["data"][$i]["position"];
	(int)$peso = $array["data"][$i]["weight_pounds"];
	$detalle = "<form class='form-inline' action='detalle.php' method='post'>
  		<input type='hidden' name='detalleURL' value='https://www.balldontlie.io/api/v1/players/".$id."'/>
		<button type = 'submit' name ='submit' class='btn btn-primary my-1'>Detalle Jugador</button>
		</form>";

	if($peso == null or peso == ''){ $peso = 0;}

	/*if($peso >= $pesoJugador )
	{echo "valor peso: " . $peso."</br>";}else{}*/


	if(  $posicionJugador == '' and  $pesoJugador == '')

		echo "
			<tr>
			  <th scope='row'>".$id."</th>
			  <td>".$nombre."</td>
			  <td>".$apellido."</td>
			  <td>".$posicion."</td>
			  <td>".$peso."</td>
			  <td>".$detalle."</td>
			</tr>";



	  else if($posicionJugador == $posicion  and   $pesoJugador >= $peso)  /*or $pesoJugador  <=  $peso ))*/{

			echo "
			<tr>
			  <th scope='row'>".$id."</th>
			  <td>".$nombre."</td>
			  <td>".$apellido."</td>
			  <td>".$posicion."</td>
			  <td>".$peso."</td>
			  <td>".$detalle."</td>
			</tr>";

	  }else if($posicionJugador == ''  and  $peso > $pesoJugador  )  /*or $peso <  $pesoJugador))*/{

		echo "
			<tr>
			  <th scope='row'>".$id."</th>
			  <td>".$nombre."</td>
			  <td>".$apellido."</td>
			  <td>".$posicion."</td>
			  <td>".$peso."</td>
			  <td>".$detalle."</td>
			</tr>";

	  }else if( $posicionJugador == $posicion  and $pesoJugador == ''){

					echo "
			<tr>
			  <th scope='row'>".$id."</th>
			  <td>".$nombre."</td>
			  <td>".$apellido."</td>
			  <td>".$posicion."</td>
			  <td>".$peso."</td>
			  <td>".$detalle."</td>
			</tr>";


	  }
    //$ListaPlayers =  $id ." - ". $nombre ." - ". $apellido ." - ". $posicion ." - ". $peso . $detalle;
	//$ListaPlayers = array($id, $nombre, $apellido, $posicion, $peso, $detalle);
    //echo $ListaPlayers;
	//print_r($ListaPlayers);
}
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

 <title> WS Jugadores NBA!</title>
 </head>
 <body>
 <div>

 <form class="form-inline" action="index.php" method="post">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Busqueda Por Peso</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="peso">
    <option selected> </option>
    <option value="0"> menores 200 kg</option>
    <option value="201">mayores de 200 kg</option>
  </select>

  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Busqueda Por Posicion</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="posicion">
    <option selected> </option>
    <option value="C">C</option>
    <option value="F">F</option>
	<option value="G">G</option>
  </select>

  <button type="submit" name="submit" class="btn btn-primary my-1">Filtrar Jugador</button>
</form>

 <?php mostrarJugadores(); ?>

 </div>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
