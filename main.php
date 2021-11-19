<?php

$palabras = array('sol','luna','cielo','agua','tierra'); # Se pueden añadir o quitar palabras para añadir mas dificultad al juego

$form = "<form action = 'analisis.php'>";
$button = "<button type = 'submit'>ENVIAR</button>";
$formCierre = "</form>";

for ($i=0; $i < count($palabras); $i++) { 
    $form .= "Ordene la palabra: ".str_shuffle($palabras[$i])." ".
    "<br>".
    "<input type='text' name='palabra".$i."'>".
    "<br>";
}


echo $form.$button.$formCierre;

?>