<?php
// 1. Crear un procedimento que reciba e imprima como parametro 
// el nombre de una persona y lo concatene con el siguiente 
// mensaje "hola mundo desde un procedimeinto de: " (Nombre Apellido) 
$nombre = "Alfredo Vladimir Huanto Mamani";
function saludo($n = " ")
{
    echo "Hola mundo desde el procedimiento de: " . $n . '<br>';
}
saludo();
saludo($nombre);
// 2. Crear una función que reciba 2 parametros (nombre , edad) y  
// verifique si una persona es mayor de edad , se retornara el 
// mensaje  por verdad: "la persona (nombre) es mayor de edad" 
// por falso "la persona (nombre) es menor de edad", capturar el mensaje e imprimirlo.
echo '<br>';
echo '<br>';
echo '<br>';
$nom2 = "Vladimir Huanto";
$edad = 18;
function mayorDeEdad($nombre=" " , $ed =0)
{
    if ($ed >= 18)
        echo "La persona " . $nombre . " es mayor de edad <br>";
    else
        echo "La persona " . $nombre . " no es mayor de edad <br>";
}
mayorDeEdad();
mayorDeEdad($nom2 , $edad);