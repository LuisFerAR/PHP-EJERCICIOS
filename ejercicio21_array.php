<?php

$frutas=array(" fresa", " Pera", "Manzana");

print_r($frutas);

echo $frutas[1]."<br/>";

for ($i=0;$i< count($frutas);$i++){

  echo $i. " ". $frutas[$i]."<br/>";
}



?>