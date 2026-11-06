<!-- Crea una pagina web con un formulario para elegir el idioma en el que se muestra, ingles 
o español. Almacena la elecciion del usuario con una cookie para que la siguiente vez que el usuario 
se conecte la pagina aparezca directamente em su idioma. si la cookie no existe, 
la pagina se mostrara en español minimo dos idiomas y el array de los idiomas-->



<?php

    // Realizado por Carlos Plata Morán
    // Formulario 

        // $texto = $textos['es'] ['texto'] = "Selecciona un idioma:"; // Idioma por defecto
        // $texto = $textos['en'] ['texto'] = "Select a language:"; // Idioma por defecto
        // // $texto = ['es']['es'] = "Español"; // Idioma por defecto
        // // $texto = ['en']['en'] = "English"; // Idioma por defecto
    $textos['es']['texto'] = "Selecciona un idioma:"; 
    $textos['en']['texto'] = "Select a language:"; 
    $textos['es']['nombre'] = "Escribe tu nombre:";
    $textos['en']['nombre'] = "Write your name:";
    $textos['es']['placeholder'] = "Tu nombre";
    $textos['en']['placeholder'] = "Your name";
    $textos['es']['guardar'] = "Guardar";
    $textos['en']['guardar'] = "Save";
    $textos['es']['enviar'] = "Enviar";
    $textos['en']['enviar'] = "Send";
    $textos['es']['info'] = "El idioma seleccionado es: ";
    $textos['en']['info'] = "The selected language is: ";


    if (isset($_POST['idioma'])&& $_POST['idioma'] != '') {
        $idioma = $_POST['idioma'];
        setcookie('idioma', $idioma, time() + 3600 * 24);
    }

    else if  (isset($_COOKIE['idioma'])) {
        $idioma = $_COOKIE['idioma'];
        // setcookie('idioma', $idioma, time() + 3600 * 24);
    } 

    else {
        $idioma = 'es';
        setcookie('idioma', $idioma, time() + 3600 * 24, "/");
    }
    echo "<form method='post' action=''>";
    echo "<label for='idioma'>Selecciona un idioma:</label>";
    echo "<select name='idioma' id='idioma'>";
    echo "<option value='en' " . ($idioma === 'en' ? 'selected' : '') . ">English</option>";
    echo "<option value='es' " . ($idioma === 'es' ? 'selected' : '') . ">Español</option>";
    echo "</select>";
    echo "<button type='submit'>Guardar</button>";
    echo "</form>";
    echo " Escribe tu nombre: <input type='text' placeholder='Tu nombre' name='nombre' id='nombre'>";
    echo "<button type='submit'>Enviar</button>";
    echo "<p>El idioma seleccionado es: " . $textos[$idioma]['info'] . "</p>";
    echo "";
    echo "<br>";
    // echo "<p>Cookie idioma: " . $_COOKIE['idioma'] . "</p>";
?>