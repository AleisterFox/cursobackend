<?php

#require 'main.php';

$palabras = array('sol','luna','cielo','agua','tierra'); #Debe coincidir con el array de palabras en main.php 


# Determina si las palabras que ingreso el usuario coinciden con las originales
for ($i=0; $i < count($palabras); $i++) { 
    if ($_REQUEST["palabra".$i] == $palabras[$i]) {
        echo "La palabra ".$i." ingresada es correcta"."<br>";
    }
    else{
    echo'La palabra ingresada es incorrecta, la palabra correcta es: '.$palabras[$i]."<br>";
    }
}
?>