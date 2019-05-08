<?php
session_start();


// echo ("Email do Cidadão:" . $_SESSION['email']);
// echo ("Senha do Cidadão:" . $_SESSION['senha']);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Dados Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>



<form method="post" action="editarperfil.php" class="container">
<div class="form-group">
    <label style="color:white"><?php
    echo($_SESSION['id']);
    ?></label>

    <h1><label type="email" name="email">Usuario: 
        <?php
        echo ($_SESSION['email']);

        ?></label><br>

    <label type="text" name="senha">Senha: 
        <?php
        echo ($_SESSION['senha']);

        ?></label><br><hr>

    <a href="editarperfil.php"><label type="text" name="editar" >EDITAR</label></a><hr>
    <a href="index.php"><label type="text" name="editar" >SAIR</label></a>
    
</h1></div>

</form>

<body>
    <?php
    // include_once('');

    if (!isset($_SESSION['dados'])) { }


    ?>
</body>