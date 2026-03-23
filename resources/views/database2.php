<?php
try{
    $connexion = new PDO("mysql:host=localhost;dbname=tt2","root","");
    }catch(PDOException $e){
        echo "Erreur".$e->getMessage();
    }
?>