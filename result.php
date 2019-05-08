<?php
session_start();

include_once("conectar.php");

$login = mysqli_real_escape_string($conn, $_POST["email"]);
$senha = mysqli_real_escape_string($conn, $_POST["senha"]);

$query = "SELECT * FROM login where  email ='$login' and senha='$senha'";

$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    echo ('<br>' . 'sim é maior' . '<br>');
    $retornoDoSelect = mysqli_fetch_array($result);
    print_r($retornoDoSelect);
    $_SESSION['id']= $retornoDoSelect['id'];
    // echo($_SESSION['id']);
    $_SESSION['email'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:listar.php');

    

} else {
    $_SESSION['erro'] = 'Usuario ou Senha Inválida';
    header('location:index.php');
}

?>
