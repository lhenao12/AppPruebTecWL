
<?php
//$_POST['id']." - ".$_POST['nombre']." - ".$_POST['AlturaPies']." - ".$_POST['AlturaPulg']." - ".$_POST['Apellido']." - ".$_POST['posicion']." - ".$_POST['DatEquipo']." - ".$_POST['PesoLibras'];

function mostrarDetJugadores(){
global $dataFile , $array, $datosTeam; 

if($_POST['detalleURL'] <> null or $_POST['detalleURL'] <> '' ){ 
$detalleurl = $_POST['detalleURL'];
 //echo  $detalleurl;
 
$dataFile = file_get_contents($detalleurl);
$array = json_decode($dataFile,true);
}



 echo "</br>" ."</br>";
 //print_r($array);
 
 
echo " <div class='container', style='background: blue-sky;'>
 <h1>Detalle Jugador NBA </h1>
<table class='table table-bordered'>
  <ul class='list-group list-group-flush'>";

	global $jugador;

	

	if (is_array($array) || is_object($array))
	{
	
		
	foreach($array as $equipo=>$pos)
 	{
 	echo "<li class='list-group-item'>".$equipo." : ";
	
 	foreach((array)$pos as $team=>$item)
 		{
 		echo $datosTeam = " ".$item."</br>";
 		}

 	}
	
	$id = $array["team"]["id"];
	$abbreviation = $array["team"]["abbreviation"];
	$city = $array["team"]["city"];
	$conference = $array["team"]["conference"];
	$division = $array["team"]["division"];
	$full_name = $array["team"]["full_name"];
	$name = $array["team"]["name"];
	
	$infoTeam = $id." - ".$abbreviation." - ".$city." - ".$conference." - ".$division." - ".$full_name." - ".$name;
	
	}
	
echo '<tr>';
	$detalle = "<form class='form-inline' action='guardaPlayer.php' method='post'>
  		<input type='hidden' name='id' value='".$array["id"]."'/> 
		<input type='hidden' name='nombre' value='".$array["first_name"]."'/>
		<input type='hidden' name='AlturaPies' value='".$array["height_feet"]."'/>
		<input type='hidden' name='AlturaPulg' value='".$array["height_inches"]."'/>
		<input type='hidden' name='Apellido' value='".$array["last_name"]."'/>
		<input type='hidden' name='posicion' value='".$array["position"]."'/>
		<input type='hidden' name='DatEquipo' value='".$infoTeam."'/>
		<input type='hidden' name='PesoLibras' value='".$array["weight_pounds"]."'/>
		<button type = 'submit' name ='submit' class='btn btn-primary my-1'>Agregar Jugador</button>
		</form>";
	echo"<td>".$detalle."</td>";

	echo '</tr>';
echo   "</ul>
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

 <title>Detalle Jugador NBA!</title>
 </head>
 <body>


 <?php mostrarDetJugadores();?>
 
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
 </body>
