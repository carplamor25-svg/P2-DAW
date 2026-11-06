<?php
    // Realizado por Carlos Plata Morán
    // Ejercicio 5 que recibe todos los loguins que se reciben del formulario 


    // echo "Usuario introducido: ".$_POST['usuario']."<br>";
    // echo "La contraseña introducida es: ".$_POST['clave']."<br>";


    if ($_POST['usuario']=="Carlos"&&$_POST['clave']=="Carlos")
        header("Location:bienvenido.html");
    else
        header("Location:error.html");
    // Hay que enviar las cabeceras antes de 
    // empezar con el cuerpo de la respuesta. Utilizar la funcion header()
    // antes de que se empiece a escribir la salida.
?>