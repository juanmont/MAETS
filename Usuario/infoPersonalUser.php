<!DOCTYPE html>

<html>

<head>
  	<title> MAETS </title>
  	<link rel="icon" type="image/png" href="../images/MAETS.png" />

  	
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/users.css" />
</head>


<?php  include ('../static/mainTOP.php'); ?>  
<?php include ('../static/userMenu.php'); ?>

      <div id = "right-menu">
          <h2>Actualiza o completa tu infomacion</h2>
            <div id ="updateInfoButton">
              <button type="button" id = "updateInfoButton">Actualizar</button>
            </div>
        

     </div>
      <div id ="mainContent">
      <h1> Perfil del usuario/Información personal</h1>

      <table>
        
 
        <tr>
            <td>Nombre:</td>
             <td><input type="text" name="nombre" id="nombre" class="texto" value= <?php echo $_SESSION["Nombre"]; ?> /></td>
        </tr>
 
         <tr>
            <td>Apellidos:</td>
                <td><input type="text" name="apellidos" id="apellidos" class="texto" value= <?php echo $_SESSION["Apellidos"]; ?> /></td>
        </tr>

        <tr>
            <td>Correo:</td>
                <td><input type="text" name="mail" id="mail" class="texto" value= <?php echo $_SESSION["Email"]; ?> /></td>
        </tr>

        <tr>
            <td>Pais:</td>
             <td><input type="text" name="pais" id="pais" class="texto" value= <?php echo $_SESSION["Pais"]; ?> /></td>
        </tr>
        <tr>
            <td>Ciudad:</td>
             <td><input type="text" name="ciudad" id="ciudad" class="texto" value= <?php echo $_SESSION["Ciudad"]; ?> /></td>
        </tr>
        <tr>
            <td>Direccion:</td>
             <td><input type="text" name="direccion" id="direccion" class="texto" value= <?php echo $_SESSION["Direccion"]; ?> /></td>
        </tr>
        <tr>
            <td>Codigo postal:</td>
              <td><input type="text" name="CP" id="CP" class="texto" value= <?php echo $_SESSION["CP"]; ?> /></td>
        </tr>

      </table>
    </div>


<?php  include ('../static/mainBOT.php'); ?>
  
</html>
  