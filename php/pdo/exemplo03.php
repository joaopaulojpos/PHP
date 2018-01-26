<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET login = :LOGIN, senha = :PASSWORD WHERE idusuario = :ID");

$login = "josefina";
$password = "jacaiu";
$id = 3;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "ALTERADO COM SUCESSO!";

?>