<?php
// Realizado por Carlos Plata Morán
// //  Ejercicio 3 SUmar numeros desde el panel de busqueda
// Actividad propuesta 3.1
// EScribir un fichero que reciba dos parametros, num1 y num2, y
//  muestre su suma. 
//  Hay que comprobar que los dos argumentos existan y sean numeros
// is_numeric (num1 + num2)
    if (empty($_GET['num2']) || empty($_GET['num2'])){
        echo "Error, falta El parametro del numero 1 o del numero 2";
        }
    else{
        $suma = $_GET['num1'] + $_GET['num2'];
        echo "La suma de los numeros es:  ".$_GET['num1']." + ".$_GET['num2']." = ".$suma;
        }
    // SIntaxis para usar en la web:
    // http://localhost/P2-daw/02hola_mundo_comprovacion.php?nombre=Carlos
    // http://localhost/P2-daw/02hola_mundo_comprovacion.php?num1=5&num2=4
?>