<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (login, senha, dt_cadastro) VALUES(:LOGIN, :PASSWORD, :DTCADASTRO)");

$login = "root";
$password = "1245";
$dt_cadastro = date('Y-m-d');

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":DTCADASTRO", $dt_cadastro);

$stmt->execute();

echo "INSERIDO COM SUCESSO!";

?>