<?php

include ('session.php'); 
include ('config.php');
//a�ade un juego a la base de datos(faltan parametros)
function addGame($titulo, $precio, $edad, $etiquetas, $descripcion, $descripcionLarga, $tipoJuego, $idiomas, $portada){
	$connection = createConnection();

	return (true);
}

//elimina juego de la bdd
function deleteGame($id){
	
	return(true);
}
//modifica juego en la bdd
function modifyGame(){
	
	return(true);
}

//TRAE UNA FILA ENTERA DE UN JUEGO CON EL NOMBRE QUE LE PASES, ESTE ES EL METODO QUE FUNCIONA BIEN
function getGame($juego){
	$connection = createConnection();
	$result = "SELECT * FROM juego WHERE titulo = '$juego'";
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));
	if($row = $result->fetch_assoc())
		{     
			closeConnection($connection);
			return $row;
		}
		else
		{
			echo "NO EXISTE ESE JUEGO";
		}
closeConnection($connection);
}

// M�todo que recupera un juego seg�n su compa��a.
function getGameByCompanyia($companyia){
	$connection = createConnection();
	$result = "SELECT * FROM juego WHERE Companyia = '$companyia'";
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));
	if($row = $result->fetch_assoc())
		{     
			closeConnection($connection);
			return $row;
		}
		else
		{
			echo "NO EXISTE ESE JUEGO";
		}
closeConnection($connection);
}

function getNameOfGame($juego){
	$row = getGame($juego);
	echo $row["Titulo"];
}

function addGameToUser($juego, $user) {

if($ret = $res->fetch_assoc()) {
		closeConnection($connection);
		return ($ret);
	}

	closeConnection($connection);
	return (NULL);

	$connection = createConnection();

	$sql = "SELECT Id FROM usuario WHERE Nick = '$user'";
	$result = $connection->query($sql) or die ($connection->error. " en la linea".(_LINE_-1));

	$idUser = $res->fetch_assoc();
	
	$sql = "SELECT * FROM compras WHERE IDUsuario = '$idUser' AND IDJuego = '$juego'";
	$result = $connection->query($sql) or die ($connection->error. " en la linea".(_LINE_-1));


	if($row = $result->fetch_assoc()) {     
		echo "Ya tienes este juego en tu biblioteca.";
	}
	else {
		$q = "INSERT INTO compras ('IDUsuario', 'IDJuego') VALUES ('$idUser', '$juego')";
		$connection->query($q) or die($connection->error. " en la linea".(_LINE_-1));
		echo "Compra realizad con �xito.";
	}

	closeConnection($connection);
}

$functionName = filter_input(INPUT_GET, 'functionName');
switch ($functionName) {
    case "addGame":        
        break;
    case "deleteGame":
        break;
    case "modifyGame":
        break;
    case "getGame":
    	return getGame($_GET["juego"]);
    case "getGameByCompanyia":
    	return getGameByCompanyia($_GET["companyia"]);
    case "getNameOfGame":
    	echo getNameOfGame($_GET["juego"]);
    case "addGameToUser":
    	echo addGameToUser($_GET["juego", "usuario"]);

}

?>