<?php
session_start();

include_once("conectar.php");

$id = mysqli_real_escape_string($conn, $_POST["id"]);
$login = mysqli_real_escape_string($conn, $_POST["email2"]);
$senha = mysqli_real_escape_string($conn, $_POST["senha2"]);

$query = "DELETE FROM login WHERE login.id='$id'";

// $result = mysqli_query($conn, $query);


if(!mysqli_query($conn,$query))
{
    echo($query."<br>");
    die("falha na comunicaçao".mysqli_connect_error());
}else{
    // echo("Deu Certo a Inserção!!!");
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $login;
    $_SESSION['senha'] = $senha;
    echo($id);
    header('location:index.php');

}


?>