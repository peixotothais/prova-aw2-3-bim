<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "avalicao3bim";

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$email = $_GET['email'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO usuario (nome, sobrenome, email)
  VALUES (' $nome ' , ' $sobrenome ' ,  ' $email ')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Novo registro criado!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>