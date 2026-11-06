<?php
// Realizado por Carlos Plata Morán
// La cookie expira a los 24 segundos

if (isset($_GET['borrar'])) {
    // Borrar = fecha de expiración en el pasado
    setcookie('visitas', '', time() - 3600);
    echo "Cookie borrada";
} elseif (!isset($_COOKIE['visitas'])) {
    // Primera visita: se crea con 24 segundos de vida
    setcookie('visitas', '1', time() + 24);
    echo "Bienvenido por primera vez";
} else {
    $visitas = (int) $_COOKIE['visitas'];
    $visitas++;
    // Se guarda el contador actualizado y se renueva el plazo de 24 segundos
    setcookie('visitas', $visitas, time() + 24);
    echo "Bienvenido por $visitas vez";
}
?>
<p><a href="?borrar=1">Borrar cookie</a></p>