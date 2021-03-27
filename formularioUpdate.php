<?php 
$id = $_GET['id'];
require_once ('update.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
            <div class="input-group mb-3">
            <input type="text" class="form-control"name="input-tarefa-update" placeholder="Insira sua tarefa">
                <button class="btn btn-outline-secondary" type="submit" name="adicionar-update" id="button-addon1">Adicionar Tarefa</button>
            </div>
        </form>


 <script src="./js/bootstrap.js"></script>
</body>
</html>


