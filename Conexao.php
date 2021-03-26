<?php
class Conexao{
        public function getConnection(){
        try{
        return  new PDO('mysql:host=localhost;dbname=listatarefas;','root','');
        }catch(PDOException $e){
        echo "Error. " .$e ->getMessage();
        }
    }
}