<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />

	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#eliminarBoton').click(
			 	function(){
					$.get("../AJAX/comunidadGestor.php",{ functionName:"deleteAnalisis", juego:$('#juego').val(), usuario:$('#usuario').val() },function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "../admin/gestorComunidad.php";
				 			
				 			
			 			}
			 		);
				});
		});
	 </script>
</head>


<?php  include ('../static/mainTOP.php'); ?>	
<?php  include ('../static/communityMenu.php'); ?>	
			
			
			
			<div id="cajaThread">

			<?php   
			if(isset($_SESSION["Rol"]) && ($_SESSION["Rol"]='Administrador' or $_SESSION["Rol"]=='Gestor-Comunidad') ){
				
				echo '
				<h1>Eliminar analisis</h1>
				<p class="eliminar">Nombre juego: <input id="juego" name="juego" type="text"/></p>
				<p class="eliminar">Nombre usuario: <input id="usuario" name="usuario" type="text"/></p>
				<p><button name="eliminarBoton" id="eliminarBoton">Eliminar</button></p>';

				 } 

			else
				echo "<h1> Vista no autorizada </h1>"


				 ?> 
				
				
			</div>	
	    	
<?php  include ('../static/mainBOT.php'); ?>	

	
</html>