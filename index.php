<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Hola Mundo!</title>
    </head>
    <body>

<?php
$DesdeLetra = "a";
$HastaLetra = "z";

$letraAleatoria1 = chr(rand(ord($DesdeLetra), ord($HastaLetra)));
$numeroAleatorio1 = rand(0, 9);
$letraAleatoria2 = chr(rand(ord($DesdeLetra), ord($HastaLetra)));
$numeroAleatorio2 = rand(0, 9);
$letraAleatoria3 = chr(rand(ord($DesdeLetra), ord($HastaLetra)));
$numeroAleatorio3 = rand(0, 9);
$letraAleatoria4 = chr(rand(ord($DesdeLetra), ord($HastaLetra)));
$numeroAleatorio4 = rand(0, 9);
$numero=$letraAleatoria1.$numeroAleatorio1.$letraAleatoria2.$numeroAleatorio2.$letraAleatoria3.$numeroAleatorio3.$letraAleatoria4.$numeroAleatorio4;
             
echo "Los digitos ganadores del premio es = ".$numero;
   ?> 
</body>
</html>


