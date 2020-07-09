<?php

function connect_to_database(){
    $servername = "localhost" ; 
    $username = "root";
    $password = "root"; 
    $databasename = "basetest01";
    
    try {
    $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected seccessfully";
    return $pdo;
    } catch (PDOException $e){
    echo "Connection failed : ". $e->getMessage(); 
    
    }
    
    }
"UPDATE 'produit' SET nom='Short bleu'
WHERE quantite='1')";

	?> 