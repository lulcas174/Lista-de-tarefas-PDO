<?php 
include 'Conexao.php';
if (isset($_POST['adicionar'])){ //ele pega o botão aqui, ai toda vez que apertar o botão ,em teoria ele tem que verificar se ta tendo botao antes de vir aqui

$conn = new Conexao();
$connection = $conn -> getConnection();

$inputTarefa = $_POST['inputTarefa'];

$stmt = $connection->prepare('INSERT INTO listagem(tarefa) VALUES(?)');

$stmt -> bindParam(1,$inputTarefa);
$stmt -> execute();

}
?>

