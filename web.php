<?php

if(isset($_REQUEST["politica"])){
    setcookie("politica", "aceptada", time() + 3600 );
    echo "<h1>Aquí va el contenido</h1>";
    echo "<p>Hemos creado la cookie con éxito </p>";
    
}




?>