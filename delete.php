<?php 
include 'Conexao.php';
$conn = new Conexao();
$connection = $conn -> getConnection();

$id = $_GET['id'];


$stmt = $connection -> prepare('DELETE FROM listagem WHERE id = :id ');


$stmt -> bindParam(':id', $id);
$stmt -> execute();
header("location:index.php");
?>
