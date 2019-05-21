<?PHP

include_once('conectar.php');

$email = mysqli_escape_string($conn,$_POST['email']);
$senha = mysqli_escape_string($conn,$_POST['senha']);
$termo = mysqli_escape_string($conn,$_POST['termo']);
$tipoDeAcesso = mysqli_escape_string($conn,$_POST['tipoDeAcesso']);


$query = "INSERT INTO login (email,senha,tipoDeAcesso) values ('".$email."','".$senha."','".$tipoDeAcesso."')";


if(!mysqli_query($conn,$query))
{
    echo($query."<br>");
    die("falha na comunicaçao".mysqli_connect_error());
}else{
    echo("Deu Certo a Inserção!!!");
    header('location:index.php');

}

?>