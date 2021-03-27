<?php 
include 'Conexao.php';
$conn = new Conexao();
$connection = $conn -> getConnection();

$id = $_GET['id'];


$stmt = $connection -> prepare('DELETE FROM listagem WHERE id = :getID');


$stmt -> bindParam(':getID', $id);
$stmt -> execute();
header("location:index.php");
?>
