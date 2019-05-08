<?PHP

include_once('conectar.php');

$email = mysqli_escape_string($conn,$_POST['email']);
$senha = mysqli_escape_string($conn,$_POST['senha']);
$termo = mysqli_escape_string($conn,$_POST['termo']);


$query = "INSERT INTO login (email,senha) values ('".$email."','".$senha."')";


if(!mysqli_query($conn,$query))
{
    echo($query."<br>");
    die("falha na comunicaçao".mysqli_connect_error());
}else{
    echo("Deu Certo a Inserção!!!");
    header('location:index.php');

}

?>