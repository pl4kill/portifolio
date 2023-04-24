<title>Obrigado</title>
<link rel="stylesheet" href="../css/contato.css">
<?php 
require_once 'connect.php';

if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $msg = $_POST['mensagem'];

    $sql = "INSERT INTO contato VALUES (NULL,'$nome','$email','$msg')";

    if($conn -> query($sql) === TRUE){
echo "<body class='main'>
<h1 class='tit'>Obrigado pelo seu comentário</h1>
<h2 class='fra'>Estarei entrando em contato o mais breve possível</h2>
<a href='../index.php'><button class='btn'>Voltar</button></a>
</body>";
    }
}
?>
