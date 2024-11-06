<?php

$host = "localhost";
$username = "root";
$dbname = "HerScents";
$password = "";

try{

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);

    $pdo->setAttribute(PDO::ATTr_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "Error: ". $e->getMessage();

}

?>