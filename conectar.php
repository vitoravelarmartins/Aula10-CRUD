<?php
    
    $servidor ="localhost";
    $usuario ="root";
    $senha ="";
    $bdnome ="login";

    $conn = mysqli_connect($servidor,$usuario,$senha,$bdnome);

    if(!$conn){
        die("Falha na conexão ".mysqli_connect_erro());

    }else{
        echo("Conectado no banco ");
    }

?>