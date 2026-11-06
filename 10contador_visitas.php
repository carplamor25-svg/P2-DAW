<?php
   // Realizado por Carlos Plata Morán
   if(!isset($_COOKIE['visitas'])){
    setcookie('visitas','1',time()+3600*24); //Expira en 24 en segundos 
    echo "Bienvenido por primera vez";
   }
    else{
        $visitas = (int) $_COOKIE['visitas'];
        $visitas ++;
        echo "Bienvenido por $visitas vez";
        // Se actualiza la coockie cada 24 horas pero si vuelves a entrar se refresca esta misma
        // restaurando el tiempo 
        setcookie('visitas',$visitas,time()+3600*24);
    }
?>