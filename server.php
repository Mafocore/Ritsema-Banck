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

if(isset($_POST['submit'])){

    //$Sessie = $_SESSION['ID']['Voornaam']['Achternaam']['Email'];

    $Voornaam = $_POST['Voornaam'];
    $Achternaam = $_POST['Achternaam'];
    $Geslacht = $_POST['Geslacht'];
    $Geboortedatum =$_POST['Geboortedatum'];
    $Email = $_POST['Email'];
    $Wachtwoord1 = $_POST['Wachtwoord1'];
    $Wachtwoord2 = $_POST['Wachtwoord2'];
    $Mobiel = $_POST['Mobiel'];
    $BSN = $_POST['BSN'];

    if ($Wachtwoord1 !== $Wachtwoord2) {
        $errors[] = "Wachtwoorden komen niet overeen";
    }

    if($Voornaam===''){
        echo "<script>alert('Please enter your firstname!')</script>";
        exit();
    }

    if($Achternaam===''){
        echo "<script>alert('Please enter your secondname!')</script>";
        exit();
    }

    if($Geboortedatum===''){
        echo "<script>alert('Please enter your birthdate!')</script>";
        exit();
    }

    if($Email===''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    if($Wachtwoord1===''){
        echo "<script>alert('Please enter your Password!')</script>";
        exit();
    }

    if($Wachtwoord2===''){
        echo "<script>alert('Please enter your Password validation!')</script>";
        exit();
    }

    if($Mobiel===''){
        echo "<script>alert('Please enter your Mobile!')</script>";
        exit();
    }

    if($BSN===''){
        echo "<script>alert('Please enter your BSN!')</script>";
        exit();
    }

    // Validation and field insertion

    $query = $pdo->prepare("SELECT `Email` FROM `user` WHERE `Email` = ?" );
    $query->bindValue( 1, $Email );
    $query->execute();

    if( $query->rowCount() > 0 ) { # If rows are found for query
        echo "<script>alert('Email is al in gebruik!')</script>";
    }


    $query = $pdo->prepare("SELECT `Mobiel` FROM `user` WHERE `Mobiel` = ?" );
    $query->bindValue( 1, $Mobiel );
    $query->execute();

    if( $query->rowCount() > 0 ) { # If rows are found for query
        echo "<script>alert('Mobiel/tl.nummer is al in gebruik!')</script>";
    }

    $query = $pdo->prepare('SELECT `BSN` FROM `user` WHERE `BSN` = ?' );
    $query->bindValue( 1, $BSN );
    $query->execute();

    if( $query->rowCount() > 0 ) { # If rows are found for query
        echo "<script>alert('ongeldig BSN nummer!')</script>";
    }

    $Wachtwoord = password_hash($Wachtwoord1, PASSWORD_BCRYPT, array("cost" => 12));

    $query = "INSERT INTO user (Voornaam, Achternaam, Geslacht, Geboortedatum, Email, Wachtwoord, Mobiel, BSN) VALUES (?,?,?,?,?,?,?,?)";
    $query = $pdo->prepare($query);
    $query->bindParam('1', $Voornaam);
    $query->bindParam('2', $Achternaam);
    $query->bindParam('3', $Geslacht);
    $query->bindParam('4', $Geboortedatum);
    $query->bindParam('5', $Email);
    $query->bindParam('6', $Wachtwoord);
    $query->bindParam('7', $Mobiel);
    $query->bindParam('8', $BSN);
    $query->execute();
    if($query->rowCount() >0){
        header('location: login.php');
        exit();
    }
    header('location: login.php');
    exit();
}

if(isset($_POST['login'])){

    //Retrieve the field values from our login form.
    $Email = !empty($_POST['Email']) ? trim($_POST['Email']) : null;
    $Wachtwoordlogin = !empty($_POST['Wachtwoord']) ? trim($_POST['Wachtwoord']) : null;

    //Retrieve the user account information for the given username.
    $sql = "SELECT ID, Voornaam, Achternaam, Email, Wachtwoord FROM user WHERE Email = :Email";
    $stmt = $pdo->prepare($sql);

    //Bind value.
    $stmt->bindValue(':Email', $Email);

    //Execute.
    $stmt->execute();

    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
        die('Incorrect Email / password combination!');
    } else{
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.

        //Compare the passwords.
        $validPassword = password_verify($Wachtwoordlogin, $user['Wachtwoord']);

        //If $validPassword is TRUE, the login has been successful.
        if($validPassword){

            //Provide the user with a login session.
//            $_SESSION['sess_Voornaam'] = $Voornaam['Voornaam'];
//            $_SESSION['sess_Achternaam'] = $Achternaam['Achternaam'];
//            $_SESSION['sess_ID'] = $ID['ID'];

            //Redirect to our protected page, which we called home.php
            header('Location: dashboard.php');
            exit;

        } else{
            //$validPassword was FALSE. Passwords do not match.
            die('Incorrect username / password combination!');
        }
    }

}