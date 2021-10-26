<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Daniel Lorenzo Cabrera">
    <meta name="keywords" content="PHP, COOKIES">
    <link rel="stylesheet" href="estilos.css">
    <title>PRACTICA COOKIES</title>
    
</head>
<body>
    <div id="warning">
        <h1>Debes de aceptar la política de cookies para poder ver el contenido de la página</h1>
    </div>
    <div class="wrapper">
    <?php
        echo "<div id='cookies'>";
        echo "<h1>Esta página web usa cookies</h1>";
        echo "<p>Las cookies de este sitio web se usan para personalizar el contenido y los anuncios, ofrecer funciones de redes sociales y analizar el tráfico. Además, compartimos información sobre el uso que haga del sitio web con nuestros partners de redes sociales, publicidad y análisis web, quienes pueden combinarla con otra información que les haya proporcionado o que hayan recopilado a partir del uso que haya hecho de sus servicios.</p>"; 
        echo "<section> <a href='web.php?politica=true'>Aceptar</a> <a href='#warning'>Cancelar</a></section>";
        echo "</div>";
    ?>
        </div>  
    

      
</body>
</html>

