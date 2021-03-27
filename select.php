<!DOCTYPE html>
<html lang="pt-br">

<head>
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
</head>

<body>

        <?php
        $conn = new Conexao(); //instanciando o banco
        $connection = $conn -> getConnection(); //pegando a função que está dentro do banco que foi instanciado
        $visualizar = $connection->prepare("SELECT * FROM listagem"); //Fazendo o select da listagem do banco
        $visualizar -> execute();//executando o  statement
        $output = ''; // defini a variável output, que vai ser utilizada no foreach
        foreach ($visualizar as $lista){ // é o foreach.
        $output .=  '<td><br>'.$lista['tarefa'].'</td><div class="editalA"> 
        <a href="delete.php?id='.$lista['id'].'"><i class="far fa-trash-alt"></i></a>
        <a href="formularioUpdate.php?id='.$lista['id'].' "><i class="fas fa-edit"></i></a></div>';
        /*Primeiro,o foreach pega os valores de listagem, 
        tanto ID, quanto tarefa, quando eu chamo as $lista no foreach e no código quando eu coloco
        um td e concateno com $lista, eu to fazendo criar dinamicamente graças ao foreach pois ele é um foreach*/
        /*A segunda eu to chamando um botão que vai levar para delete.php e ele vai receber o parametro  
        de id para esse parametro, ser responsável por excluir o ID*/
        
}

        echo $output;
?>
        <script src="https://kit.fontawesome.com/27c6a2b325.js" crossorigin="anonymous"></script>
</body>

</html>