<?php 

$servidor = "localhost";
$usuario = "root";
$contra = "";


try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $contra);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM fotos";

    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    //print_r($resultado)."<br/>"; OPCION 1

    //OPCION 2
    foreach($resultado as $foto){ 
        //print_r($foto);
        echo $foto['nombre']."<br/>";
    }

    echo "Conexion de base de datos exitosa";

}catch(PDOException $error){
    echo "Conexion erronea".$error;
}

?>