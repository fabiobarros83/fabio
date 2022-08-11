<?php 
include("conexao.php");

$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$cidade=$_POST['cidade'];

$sql="INSERT INTO pessoas(nome, telefone, cidade) 
VALUES ('$nome', '$telefone','$cidade')";

if(mysqli_query($conexao,$sql)){
    echo "Cliente cadastrado com sucesso";
}
    else{
        echo "Erro".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>
