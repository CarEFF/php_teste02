<<?php 

includ('conn.php')

$id = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];

echo "$id = $email = $senha";


//preparar
$stmt = $conn->prepare("INSERT INTU users (email, senha, identificador ) VALUES (:nameU, emailU, passU) ");

//trocar
$stmt->blindParam(':nameU', $id);
$stmt->blindParam(':emailU', $email);
$stmt->blindParam(':passU', $senha);
//executar
$stmt->execute();



 ?>