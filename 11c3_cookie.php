<?php
// Realizado por Carlos Plata Morán
// La cookie expira a los 24 segundos

if (isset($_GET['borrar']) && $_GET['borrar'] == 1) { //|| (isset($_GET['borrar']) && $_GET['borrar'] == true)
    // Borrar = fecha de expiración en el pasado
    setcookie('visitas', '', time() - 3600*24);
    header("Location: " . $_SERVER['PHP_SELF']);
    // echo "Cookie borrada";
    exit;
} 

if(!isset($_COOKIE['visitas'])){
    setcookie('visitas','1',time()+3600*24); //Expira en 24 en segundos 
    echo "Bienvenido por primera vez";
}   

// if(!isset($_COOKIE['visitas'])){
//     setcookie('visitas','1',time()+3600*24); //Expira en 24 en segundos 
//     echo "Bienvenido por primera vez";
// }
// elseif (!isset($_COOKIE['visitas'])) {
//     // Primera visita: se crea con 24 segundos de vida
//     setcookie('visitas', '1', time() + 24);
//     echo "Bienvenido por primera vez";
// } 

// else {
//     $visitas = (int) $_COOKIE['visitas'];
//     $visitas++;
//     // Se guarda el contador actualizado y se renueva el plazo de 24 segundos
//     setcookie('visitas', $visitas, time() + 24);
//     echo "Bienvenido por $visitas vez";
// }

else{
        $visitas = (int) $_COOKIE['visitas'];
        $visitas ++;
        echo "Bienvenido por $visitas vez";
        // Se actualiza la coockie cada 24 horas pero si vuelves a entrar se refresca esta misma
        // restaurando el tiempo 
        setcookie('visitas',$visitas,time()+3600*24);
}

// else{
//         $visitas = (int) $_COOKIE['visitas'];
//         $visitas ++;
//         echo "Bienvenido por $visitas vez";
//         // Se actualiza la coockie cada 24 horas pero si vuelves a entrar se refresca esta misma
//         // restaurando el tiempo 
//         // setcookie('visitas',$visitas,time()+3600*24);
//         // setcookie('visitas',$visitas,time()+3600*24);
//         setcookie('visitas', '1', time() + 3600*24);
//     }



?>
<p><a href="?borrar=1">Borrar cookie</a></p>