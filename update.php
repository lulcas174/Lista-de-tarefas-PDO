<?php
include 'Conexao.php';
if (isset($_POST['adicionar-update'])){

$conn = new Conexao();
$connection = $conn -> getConnection();
$id = $_GET['id'];
$inputTarefa = $_POST['input-tarefa-update'];
$stmt = $connection->prepare('UPDATE listagem SET tarefa = :tarefa WHERE id = :id');
$stmt -> bindParam(':tarefa',$inputTarefa);
$stmt -> bindParam(':id',$id);
$stmt -> execute();
}