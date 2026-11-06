<?php
    // Realizado por Carlos Plata Morán
    // Ejercicio 6 formulario y su procesamiento en la misma pagina
    // SI va bien dedirige a bienvenida.html 
    // si va mal muestra un mensaje de error y se queda en la misma pagina 
    // para volver a rellenar el formulario
    if ($_SSERVER['REQUEST METHOD']=="POST")
        {
            if ($_POST['usuario']=="Carlos"&&$_POST['clave']=="Carlos")
                header("Location:bienvenido.html");
            }
            else
                $usuario =$_POST['usuario'];
                $err =true;
?>

<!-- FUra de todo el php tiene que ir pegado el codigo del 04formulario.html_entity_decodey 
luego lo modificamos -->
<!DOCTYPE html>
<!-- // Realizado por Carlos Plata Morán
// Ejercicio 4 formulario con php en html  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Formulario PHP</title>
</head>
<body>
    <form action="05loguin_basico.php" method="POST">
        <label for="usuario">Usuario: </label>
        <input type="text" id="usuario" name="usuario"><br>
        <!-- EL id del input se asiocia al label y a 
        javascript y el name es la variable que se manda a php 
        $_POST['usuario']-->
        <label for="clave">Contraseña</label>
        <input type="password" id="clave" name="clave"><br>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>
