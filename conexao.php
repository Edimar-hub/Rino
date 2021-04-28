<?php

 $servidor = 'localhost';
 $usuario = 'root';
 $senha = '';
 $banco = 'noticias';
 
 // Conecta-se ao banco de dados MySQL
 $mysqli = new mysqli($servidor, $usuario, $senha, $banco);
 
 // Caso algo tenha dado errado, exibe uma mensagem de erro
 if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());


// Executa uma consulta que pega cinco notícias
$sql = "SELECT * FROM noticias ";
$dados= $mysqli->query($sql);



    
// ?>
