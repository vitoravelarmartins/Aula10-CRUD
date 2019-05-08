<?php
session_start();

include_once("conectar.php");

$login = mysqli_real_escape_string($conn, $_POST["email"]);
$senha = mysqli_real_escape_string($conn, $_POST["senha"]);

$query = "UPDATE login set email='$login', senha='$senha' where email='$login'";

// $result = mysqli_query($conn, $query);


if(!mysqli_query($conn,$query))
{
    echo($query."<br>");
    die("falha na comunicaçao".mysqli_connect_error());
}else{
    // echo("Deu Certo a Inserção!!!");
    $_SESSION['email'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:listar.php');

}

?>