<?php 

$servidor = "localhost";
$usuario = "root";
$contra = "";


try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $contra);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg')";
    $conexion->exec($sql);
    
    echo "Conexion de base de datos exitosa";

}catch(PDOException $error){
    echo "Conexion erronea".$error;
}

?>