<?php
    // Realizado por Carlos Plata Morán
    // COn esto creamos o nos unimos a una nueva sesion 
    session_start();

    // Con el $_SESSION['count'] creamos o utilizamos una variable count que sirva como contador pero se 
    // guarda en la sesion para poder utilizarla mas tarde en varias paginas

    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }
    else {
        $_SESSION['count']++;
    }
    echo "Hola " . $_SESSION['count'] . " veces que has visitado esta página.";
    echo "<br><a href='14sesiones_uso_basico2.php'> siguiente </a>";
    echo "<form action='14sesiones_uso_basico2.php' method='post'";
    echo "<input type='hidden' name='count2' value='27'>";
    echo "<input type='submit' value='siguiente'>";
    echo "</form>";

?>