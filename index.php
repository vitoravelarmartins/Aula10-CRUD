<?PHP 
    session_start(); //incia a sessão
    // session_cache_expire(5); // sessão dura 5 minutos
    // $nome =  "Vitor Avelar Martins";
    // $_SESSION['Nome'] = $nome;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <style type="text/css">
        body{margin:0; padding:0}
        header{width: 100%;height: 140px;margin-top: 20px;}
        .logo{width: 70%;height: 100%;float: left;background-color: papayawhip;background-image: url()}
        .login{width: 30%;height: 100%;float: left;background-color: fuchsia}
    </style>
</head>
<body>
    <?php
        
        // include_once("cabecalho.php");
    ?>
    <header>
        <div class="logo">
            <img src="img/orkut.png" width="50%" height="100%">
        </div>
        <div class="login">
            <?PHP
                // echo("Nome do Cidadão:".$_SESSION['Nome']);
            ?>
            <form action="result.php" method="post">
                <label>Login:</label><br>
                <div class="wrap-input100 validate-input" data-validate="Email Necessário">
                <input type="email" name="email"><br>
                </div>
                <label>Senha:</label><br>
                <input type="password" name="senha"><br>
                <input type="submit" value="Entrar">
            </form>
            <a href="cadastro.php">Cadastro</a>
            <?php
                if(isset($_SESSION["erro"])){
                    echo($_SESSION["erro"]);
                    unset($_SESSION["erro"]);
                }
            ?>
        </div>
    </header>
    
</body>
</html>