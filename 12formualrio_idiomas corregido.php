<!-- Crea una pagina web con un formulario para elegir el idioma en el que se muestra, ingles 
o español. Almacena la elecciion del usuario con una cookie para que la siguiente vez que el usuario 
se conecte la pagina aparezca directamente em su idioma. si la cookie no existe, 
la pagina se mostrara en español minimo dos idiomas y el array de los idiomas-->



<?php

    // Realizado por Carlos Plata Morán
    // Formulario 

        $texto = $textos['es'] ['texto'] = "Selecciona un idioma:"; // Idioma por defecto
        $texto = $textos['en'] ['texto'] = "Select a language:"; // Idioma por defecto
        // $texto = ['es']['es'] = "Español"; // Idioma por defecto
        // $texto = ['en']['en'] = "English"; // Idioma por defecto



    if (isset($_POST['idioma'])&& $_POST['idioma'] != '') {
        $idioma = $_POST['idioma'];
        setcookie('idioma', $idioma, time() + 3600 * 24);
    }

    else if  (isset($_COOKIE['idioma'])) {
        $idioma = $_COOKIE['idioma'];
        setcookie('idioma', $idioma, time() + 3600 * 24);
    } 

    else {
        $idioma = 'es';
        setcookie('idioma', $idioma, time() + 3600 * 24);
    }

    echo "<label for='idioma'>Selecciona un idioma:</label>";
    echo "<select name='idioma' id='idioma'>";
    echo "<option value='en' " . ($idioma === 'en' ? 'selected' : '') . ">English</option>";
    echo "<option value='es' " . ($idioma === 'es' ? 'selected' : '') . ">Español</option>";
    echo "</select>";
    echo "<button type='submit'>Guardar</button>";
    echo "</form>";
    echo " Escribe tu nombre: <input type='text' placeholder='Tu nombre' name='nombre' id='nombre'>";
    echo "<button type='submit'>Enviar</button>";
    echo "<p>El idioma seleccionado es: " . $idioma . "</p>";
    echo "";
    echo "<br>";
    // echo "<p>Cookie idioma: " . $_COOKIE['idioma'] . "</p>";
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-key="page_title">Decartón S.L. - Sports Stores</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; color: #222; line-height: 1.5; }
        header, footer { background: #0b5ed7; color: #fff; padding: 1rem 2rem; }
        nav a { color: #fff; margin-right: 1rem; text-decoration: none; }
        .idiomas { float: right; }
        .idiomas a { color: #fff; font-weight: bold; margin-left: .5rem; }
        main { max-width: 800px; margin: 2rem auto; padding: 0 1rem; }
        table { border-collapse: collapse; width: 100%; margin-top: 1rem; }
        th, td { border: 1px solid #ccc; padding: .5rem; text-align: left; }
        th { background: #f0f0f0; }
        form label { display: block; margin-top: .8rem; }
        form input, form textarea { width: 100%; padding: .4rem; box-sizing: border-box; }
        button { margin-top: 1rem; padding: .5rem 1.2rem; }
    </style>
</head>
<body>

<header>
    <div class="idiomas">
        <a href="?lang=en">EN</a> | <a href="?lang=es">ES</a>
    </div>
    <h1 data-key="site_name">Decartón S.L.</h1>
    <nav>
        <a href="#home" data-key="nav_home">Home</a>
        <a href="#stores" data-key="nav_stores">Stores</a>
        <a href="#contact" data-key="nav_contact">Contact</a>
    </nav>
</header>

<main>
    <section id="home">
        <h2 data-key="home_title">Welcome to Decartón</h2>
        <p data-key="home_text">We are a chain of sports stores with shops in several cities. Come and find everything you need to practise your favourite sport.</p>
    </section>

    <section id="stores">
        <h2 data-key="stores_title">Our stores</h2>
        <table>
            <thead>
                <tr>
                    <th data-key="th_address">Address</th>
                    <th data-key="th_city">City</th>
                    <th data-key="th_phone">Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Av. de Libia 1</td><td>Córdoba</td><td>957123456</td></tr>
                <tr><td>Calle Sierpes 40</td><td>Sevilla</td><td>954456789</td></tr>
                <tr><td>Calle Larios 12</td><td>Málaga</td><td>952567890</td></tr>
            </tbody>
        </table>
    </section>

    <section id="contact">
        <h2 data-key="contact_title">Contact us</h2>
        <form>
            <label for="nombre" data-key="form_name">Name</label>
            <input type="text" id="nombre" name="nombre">

            <label for="email" data-key="form_email">Email</label>
            <input type="email" id="email" name="email">

            <label for="mensaje" data-key="form_message">Message</label>
            <textarea id="mensaje" name="mensaje" rows="4"></textarea>

            <button type="submit" data-key="form_send">Send</button>
        </form>
    </section>
</main>

<footer>
    <p data-key="footer_text">Made by Carlos Plata Morán - All rights reserved</p>
</footer>

</body>
</html>