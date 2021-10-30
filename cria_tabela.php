<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "avalicao3bim";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "CREATE TABLE Usuario (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(30) NOT NULL,
  sobrenome VARCHAR(30) NOT NULL,
  email VARCHAR(50)
  )";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "A Tabela Usuário foi criada com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>