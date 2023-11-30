<?php

class unaClase{

    public static function unMetodo(){
        echo "Hola soy un metodo statico";
    }
}

$obj=new unaClase;
$obj->unMetodo();
echo  "<br/>";
unaClase::unMetodo();

?>