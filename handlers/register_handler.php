<?php

require_once ('../connections/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    try{

        $stmt = $pdo->prepare ("INSERT INTO users (username, email, password, created_at, updated_at) VALUES (:username, :email, :password, NOW(), NOW())");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam('email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        echo "Registration Successful!";

    }catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}


?>