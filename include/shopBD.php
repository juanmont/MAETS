<?php


function selectGenero($tipo, $gen){

	if($gen == 'index')
		require_once ('/include/config.php');
	else if($gen == 'tienda')
		require_once ('/../include/config.php');

	$connection=createConnection();

	$sql = "SELECT * FROM juego WHERE tipo = '$tipo'";

	$res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
}

function selectJuegoById($id, $gen) {

	if($gen == 'index')
		require_once ('/include/config.php');
	else if($gen == 'tienda')
		require_once ('/../include/config.php');

	$connection=createConnection();

	$sql = "SELECT * FROM juego WHERE Id = '$id'";

	$res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	if($ret = $res->fetch_assoc()) {
		closeConnection($connection);

		return ($ret);
	}

	closeConnection($connection);
	return (NULL);
}

function selectMas($num, $column) {
	require_once('/include/config.php');

	$connection=createConnection();

 	$sql = "SELECT Id, Titulo, Companyia, Precio FROM juego ORDER BY " .$column. " Desc LIMIT " .$num;

 	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return ($ret);

}




?>