<?php 
session_start();
//session_destroy(); //destruir informacion

if( isset($_SESSION["usuario"])){

    echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

}else{

    echo "No hay datos";
}

?>