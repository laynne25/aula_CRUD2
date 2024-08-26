<?php 
include "conexao.php";

$nome = $_GET['nome'];
$nota = $_GET['notas'];

$insert = "INSERT INTO aluno (id, nome, notas) VALUES (NULL, '$nome', '$nota') ";

$resultado = $conn->query($insert);

if($resultado == TRUE){
    echo "cadastrado com sucesso";
}else{
    echo "não cadastradoooo";
}




?>