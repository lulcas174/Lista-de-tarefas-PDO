<?php 
require_once ('create.php'); // Esse require once ta funcionando como action do formulário, a lógica vai rodar em conjunto com  
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <h1> Lista de tarefas</h1>
        <form action="#" method="POST">
            <div class="input-group mb-3">
            <input type="text" class="form-control"name="inputTarefa" placeholder="Insira sua tarefa">
                <button class="btn btn-outline-secondary" type="submit"name="adicionar" id="button-addon1">Adicionar Tarefa</button>
            </div>
        </form>
        <div class="container-lista">
            <ul id="primeira-lista">
                <?php 
                include 'select.php';
            ?>
            </ul>
        </div>
    </div>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="./js/bootstrap.js"></script>
</body>

<!--  <input type="text" name="inputTarefa" placeholder="Insira sua tarefa" required>
            <button type="submit" name="adicionar" class="btn btn-primary">Adicionar tarefa</button> -->
</html>
