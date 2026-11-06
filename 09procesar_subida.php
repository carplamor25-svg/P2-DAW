   
<?php   
    // $err = -1; // Variable definida para evitar 'undefined variable' 
    $nombre = "";
   // Realizado por Carlos Plata Morán
   if ($_SERVER['REQUEST_METHOD']=="POST"){
    $tam = $_FILES['fichero']['size'];
    if ($tam > 256*1024)
        $err = 1;
    else{
        $nombre = $_FILES['fichero']['name'];
        $nombre_temp = $_FILES['fichero']['tmp_name'];

        $ress = move_uploaded_file($nombre_temp, "subidos/".$nombre);
        if($ress)
            $err = 0;
        else
            $err =2;
    }
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 Formulario PHP PARA SUBIDA DE DATOS</title>
</head>
<body>
    <?php
        if(isset($err)) {
            if ($err == 0){
                echo "<p><font color='green'>EL fichero $nombre se ha subido correctamente.</p>"; 
            }
            else if($err == 1){
                echo "<p><font color='green'>EL fichero $nombre es demasiado grande.</p>"; 
            }
            else if($err == 2){
                echo "<p><font color='green'>EL fichero $nombre no se ha subido correctamente debido a un error.</p>"; 
            }
            else{
                echo "<p><font color='green'>EL fichero $nombre ha explotado, peru arde el mundo gracias.</p>"; 
            }
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
        method="POST" enctype="multipart/form-data">
        Elija un fichero: 
        <input type="file" name="fichero"> &nbsp;
        <input type="submit" value="Subir fichero">
    </form>
</body>
</html>



 <!-- FUra de todo el php tiene que ir pegado el codigo del 04formulario.html_entity_decodey 
luego lo modificamos 
<!DOCTYPE html>
 // Realizado por Carlos Plata Morán
// Ejercicio 4 formulario con php en html  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 Formulario PHP PARA SUBIDA DE DATOS</title>
</head>
<body>
    <?php
        if(isset($err) && $err==true)
            echo "<"
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_SELFT']);?>"
        method="POST" enctype="multipart/from-data">
        Elija un fichero: 
        <input type="file" name="fichero"> &nbsp;
        <input type="submit" value="Subit fichero">
    </form>
</body>
</html> -->
