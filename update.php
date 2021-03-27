<?php
include 'Conexao.php';//chama o banco dentro do update 
if (isset($_POST['adicionar-update'])){ // Roda a lógica do isset, caso o botão adicionar-update seja acionado, ele vai rodar o código inserido no if
$conn = new Conexao();//instancia a conexão com o banco
$connection = $conn -> getConnection();//chama a método getConnection que está na minha classse de conexão
$id = $_GET['id'];//ta dando get no id 
$inputTarefa = $_POST['input-tarefa-update'];// pega o INPUT do formulario de update
$stmt = $connection->prepare('UPDATE listagem SET tarefa = :tarefa WHERE id = :id');// ta fazendo a logica do update, toda vez que eu colocar um input novo apos apertar o botao de editar
$stmt -> bindParam(':tarefa',$inputTarefa);//ta pegando input
$stmt -> bindParam(':id',$id); //Ta pegando o id
$stmt -> execute(); //capitão obvio

header("location:index.php"); // redireciona para o index
}
?>

