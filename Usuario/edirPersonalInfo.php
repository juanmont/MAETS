<!DOCTYPE html>

<html>

<head>
  	<title> MAETS </title>
  	<link rel="icon" type="image/png" href="../images/MAETS.png" />
  	<link rel="stylesheet" type="text/css" href="../css/tienda.css" />
  	<link rel="stylesheet" type="text/css" href="../css/ptienda.css" />
  	<link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>


<?php  include ('../static/mainTOP.php'); ?>  

      <div id = "left-menu">
        <h2>Opciones</h2>
        <p><a href='/MAETS/Usuario/infoPersonalUser.php'>Informacion personal </a></p>
        <p> <a href='/MAETS/Usuario/editInfo.php'>Editar cuenta </a></p>
        <p><a href='/MAETS/Usuario/misJuegosUser.php'>Mis juegos </a></p>
        <p><a href='/MAETS/Usuario/amigos.php'>Amigos</a></p>
       	<p>Cerrar sesión </p>
       
      </div>

      <div id = "right-menu">
                
        
          
           
        

     </div>


     
        <h1> Perfil del usuario/Editar información de tu cuenta</h1>

        <table>
            
            

            <tr>
             <td>Nick:</td>
             <td><input type="text" name="nick" id="nick" class="texto" value= <?php echo $_SESSION["Nick"]; ?> /></td>
             
    				
            </tr>

            <tr>
             <td>Nombre:</td>
             <input type="text" name="nombre" id="nombre" class="texto" value= <?php echo $_SESSION["Nombre"]; ?> />

            </tr>
     
             <tr>
                <td>Apellidos:</td>
                <td><input type="text" name="nombre" id="nombre" class="texto" value= <?php echo $_SESSION["Apellidos"]; ?> />
            </tr>

            <tr>
                <td>Correo:<input type="text" name="mail" id="mail" class="texto" value= <?php echo $_SESSION["Email"]; ?> />
            </tr>
  
        </table>
         <div id= "updateInfoButton">
             <button type="button" id="modificar">Modificar</button>
            </div>


<?php  include ('../static/mainBOT.php'); ?>
  
</html>