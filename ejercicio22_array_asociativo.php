<?php

$frutas=array("f"=>"fresa", "p"=>"Pera", "m"=>"Manzana");

print_r($frutas);

echo $frutas["f"]."<br/>";

foreach($frutas as $indice => &$valor){

     echo "El valor ".$valor." Tiene el indice: ".$indice."<br/>";
    
    //echo $frutas[$indice]."<br/>";
}

?>