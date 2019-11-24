
<?php


//echo "valores POST ".$_POST['id']." - ".$_POST['nombre']." - ".$_POST['AlturaPies']." - ".$_POST['AlturaPulg']." - ".$_POST['Apellido']." - ".$_POST['posicion']." - ".$_POST['DatEquipo']." - ".$_POST['PesoLibras'];

function mostrarDatosEquipo(){

 /*$datosEquipo = $_POST['DatEquipo'];
  print_r($datosEquipo);
 	if (is_array($datosEquipo ) || is_object($datosEquipo ))
	{
	 foreach($datosEquipo as $DE => $posicion){
		  
		  echo $datosTeam1 = '<td>'. $DE ." : " . $posicion .'</td>';
		  
	 } 
 }
 
 for($i=0; $i< count($datosEquipo); $i++ ){

    echo $datosEquipo[""]["id"];/*['id']. " - " . $datosEquipo[i]['abbreviation']. " - " . $datosEquipo[i]['city'] . " - " . $datosEquipo[i]['conference']. " - " . $datosEquipo[i]['division'].  $datosEquipo[i]['full_name'].  $datosEquipo[i]['name'].
	echo"</br>";*/
   return  $datosTeam1;
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

 <title>Modificar Jugador NBA!</title>
 </head>
 <body>
<div class='container', style='background: blue-sky;'>
 <h1>Modifica Jugador NBA </h1>
<table class='table table-bordered'>
 
<div class="container">
 <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Código</label>
      <input type="text" class="form-control" id="codigo" placeholder="Codigo" value="<?php echo $_POST['id'];?>"/>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre"value="<?php echo $_POST['nombre'];?>"/>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Altura en Pies</label>
    <input type="text" class="form-control" id="altura1" placeholder="Altura medida en pies" value="<?php echo $_POST['AlturaPies'];?>"/>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Altura en Pulg.</label>
    <input type="text" class="form-control" id="altura2" placeholder="Altura medida en pies" value="<?php echo $_POST['AlturaPulg'];?>"/>
  </div>
    <div class="form-group">
    <label for="inputAddress2">Datos del Equipo</label>
    <input type="text" class="form-control" id="datosequipo" placeholder="Datos del equipo" value="<?php echo $_POST['DatEquipo'];?>"/>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Apellido</label>
      <input type="text" class="form-control" id="apellido" value="<?php echo $_POST['Apellido'];?>"/>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Posicion de Juego</label>
      <input type="text" class="form-control" id="posicion" value="<?php echo $_POST['posicion'];?>"/>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Peso </label>
      <input type="text" class="form-control" id="peso" value="<?php echo $_POST['peso'];?>"/>
    </div>
  </div>
  <div class="form-group">
   <div class="form-check">

      <label class="form-check-label" for="gridCheck">
		--------------------											
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary my-1">Guardar</button>
</form>
 
 </div>
</table>
</div>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
 <script>
$(document).ready(function(){
  $(".btn-primary my-1:first").click(function(){
    $(this).button('disabled');
  });   
});
</script>
 
 </body>
