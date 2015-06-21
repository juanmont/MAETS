﻿<?php require_once __DIR__.'\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
  <title> MAETS </title>
  <link rel="icon" type="image/png" href="images/MAETS.png" />
  <link rel="stylesheet" type="text/css" href="css/tienda.css" />
  <link rel="stylesheet" type="text/css" href="css/ptienda.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>


<?php  include ('static/mainTOP.php'); ?>  

      <div id = "left-menu">
        <?php
          require_once("static/menuCategorias.php");
        ?>
      </div>

      <div id = "right-menu">
        <img id="imagenLupa" src="images/Lupa.png">
        <p>
          <input type="text" id="name" name="name" value="" placeholder="Buscar videojuego", required="required" autofocus="autofocus"/>  
           </br>
        </p>

     </div>

      <h1> Tienda</h1>

      <table>
        <tr><h2> Juegos más vendidos </h2></tr>
        <tr>
          <td class = "nombreColumna"><strong>Título</strong></td>
          <td class = "nombreColumna"><strong>Desarrollador</strong></td>
          <td class = "nombreColumna"><strong>Precio</strong></td>
        </tr>
        <?php
          require_once('include/vTienda.php');
          mostrarMas(6, 'Ventas');
        ?>
      </table>

      <div id="content-container">
          <br></br>
          <br></br>
          <a href="tienda/articulo-tienda.php?juego=1"><img class="image" src="images/screens/GTAV.jpg"></a>
        </div>

<?php  include ('static/mainBOT.php'); ?>
  
</html>
  