<?php
include ('session.php'); 
include ('config.php');

//recibe user/pass y comprueba en la base de datos si es correcto
function login($user, $pass){
	/*Consulta de mysql con la que indicamos que necesitamos que seleccione
	**solo los campos que tenga como nombre_administrador el que el formulario
	**le ha enviado*/
	createConnection();
	
	$result = mysql_query("SELECT * FROM usuario WHERE nick = '$user'");

	//Validamos si el nombre del administrador existe en la base de datos o es correcto
	if($result == FALSE){
			die(mysql_error());
	}

	if($row = mysql_fetch_array($result))
		{     
			//Si el usuario es correcto ahora validamos su contraseña
			 if($row["Contrasenia"] == $pass)
				 {
				  //Creamos sesión
				 	session_destroy();
					session_start();  
				  //Almacenamos el nombre de usuario en una variable de sesión usuario
					$_SESSION['Nick'] = $user;
				 }
			else
				 {
					echo "MALA CONTRASEÑA";
			 	}
		}
		else
		{
			echo "NO EXISTE ESE USUARIO";
		}

closeConnection($result);
}

//cierra la sesion
function logout(){}

//añade usuarios a la bd(faltan parametros)
function addUser(){
	return(true);
}

//elimina user de la bd
function deleteUSer(){
	return(true);
}
//añade relacion de amigos a la bdd
function addFriend(){
	return(true);
}

//elimina relacion de amigos
function deleteFriend(){
	return(true);
}


$functionName = filter_input(INPUT_GET, 'functionName');





switch ($functionName) {
    case "login":
       login($_GET["user"], $_GET["pass"]);
        
        break;
    case "logout":
        
        break;
    case "deleteUser":
        
        break;
    case "addUser":
    	break;

}

?>