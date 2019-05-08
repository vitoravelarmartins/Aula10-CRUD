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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>



<form method="post" action="alterar.php" class="container">


    <div class="form-group">

        <h2>Formulario de Edição de Cadastro</h2>
        <label>Seu Email:</label>
        <input class="form-control" type="email" name="email" value='<?php echo ($_SESSION['email']);?>'><br>
        <label>Sua Senha:</label>
        <input class="form-control" type="text" name="senha" value='<?php echo ($_SESSION['senha']);?>'><br>

        <input class="btn btn-primary" type="submit" name="editar" value="editar">
    </div>
</form>

<form method="post" action="excluir.php" class="container">
    <div class="form-group">
    <input class="form-control" type="hidden" name="id" value='<?php echo ($_SESSION['id']);?>'><br>
        
    <input class="form-control" type="hidden" name="email2" value='<?php echo ($_SESSION['email']);?>'><br>

        <input class="form-control" type="hidden" name="senha2" value='<?php echo ($_SESSION['senha']);?>'><br>

        <h1><label>Excluir Conta:</label></h1>

        <input class="btn btn-primary" type="submit" name="exlcluir" value="Excluir">
    </div>
</form>


<body>
    <?php
    // include_once('');

    if (!isset($_SESSION['dados'])) { }


    ?>
</body>