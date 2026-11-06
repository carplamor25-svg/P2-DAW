<?php
    // Como aplicacion tenemos que añadir un vinculo para borrar la cookie
   // Realizado por Carlos Plata Morán


   if(!isset($_COOKIE['visitas'])){
    setcookie('visitas','1',time() + 24); //Expira en 24 en segundos 
    // setcookie('visitas','1',time()+3600*24); //Expira en 24 en segundos 
    echo "Bienvenido por primera vez";
   }

   else if (isset($_GET['borrar'])){
        setcookie('visitas','1',time() - 3600); // Expira en 24 en segundos 
        // setcookie('visitas','1',time()-3600*24); // Expira en 24 en segundos 
        echo "Cookie borrada";
    }

    else{
        $visitas = (int) $_COOKIE['visitas'];
        $visitas ++;
        setcookie('visitas', '1', time() + 24);
        echo "Bienvenido por $visitas vez";
        // Se actualiza la coockie cada 24 horas pero si vuelves a entrar se refresca esta misma
        // restaurando el tiempo 
        // setcookie('visitas',$visitas,time()+3600*24);
        // setcookie('visitas',$visitas,time()+3600*24);
    }
?>
<p><a href="?borrar=1">Borrar cookie</a></p>
