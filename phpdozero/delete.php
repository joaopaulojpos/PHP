<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{

  $pdo = new PDO($dsn, $dbuser, $dbpass);

  $sql = "DELETE FROM usuarios WHERE id = 6";
  $pdo->query($sql);

  echo "Usuario deletado com Sucesso.";

}catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}

?>