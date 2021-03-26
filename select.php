<!DOCTYPE html>
<html lang="pt-br">
<head>
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
</head>
<body>
                
<?php
$conn = new Conexao();
$connection = $conn -> getConnection();

$visualizar = $connection->prepare("SELECT * FROM listagem");
$visualizar -> execute();
$output = '';
foreach ($visualizar as $lista){

        $output.=sprintf('<td><br>%s</td><div class="editalA"><a href="delete.php?id='.$lista['id'].'"><i class="far fa-trash-alt"></i></a>  
        <a href="#?id='.$lista['id'].'"><i class="fas fa-edit"></i></a></div>',$lista['tarefa']);
}

echo $output;
?>
<script src="https://kit.fontawesome.com/27c6a2b325.js" crossorigin="anonymous"></script>
</body>
</html>
