<?php
// Realizado por Carlos Plata Morán
// //  Ejercicio 2 Primer array y concatenar pero esta vez con empty 
    if (empty($_GET['nombre']))   //Comprueba si esta vacio
        echo "Error, falta el parámetro nombre";
    else
        echo "Hola ".$_GET['nombre'];
    // SIntaxis para usar en la web:
    // http://localhost/P2-daw/02hola_mundo_comprovacion.php?nombre=Carlos
    // http://localhost/P2-daw/02hola_mundo_comprovacion.php?num1=5&num2=4
?>