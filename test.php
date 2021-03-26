<?php

session_start();

// PDO connect
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$msg = "";

if(isset($_POST['submit'])) {
    $Email = trim($_POST['Email']);
    $Wachtwoord = trim($_POST['Wachtwoord']);
    if($Email !== "" && $Wachtwoord !== "") {
        try {
            $query = "select * from `user` where `Email`=:username and `Wachtwoord`=:password";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam('Email', $Email, PDO::PARAM_STR);
            $stmt->bindValue('Wachtwoord', $Wachtwoord, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row   = $stmt->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row)) {
                /******************** Your code ***********************/
                $_SESSION['user_ID']   = $row['ID'];
                $_SESSION['user_Voornaam'] = $row['Voornaam'];
                $_SESSION['sess_Achternaam'] = $row['Achternaam'];

            } else {
                $msg = "Invalid username and password!";
            }
        } catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        }
    } else {
        $msg = "Both fields are required!";
    }
}