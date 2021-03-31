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
    echo "Er ging iets mis herlaad de pagina!";
}

if(isset($_POST['submit'])){

    $Voornaam = $_POST['Voornaam'];
    $Achternaam = $_POST['Achternaam'];
    $Geslacht = $_POST['Geslacht'];
    $Geboortedatum =$_POST['Geboortedatum'];
    $Email = $_POST['Email'];
    $Wachtwoord1 = $_POST['Wachtwoord1'];
    $Wachtwoord2 = $_POST['Wachtwoord2'];
    $Mobiel = $_POST['Mobiel'];
    $emailvar = filter_var($Email, FILTER_SANITIZE_EMAIL);
    $voornaamvar = filter_var($Voornaam, FILTER_SANITIZE_SPECIAL_CHARS);
    $achternaamvar = filter_var($Achternaam, FILTER_SANITIZE_SPECIAL_CHARS);
    $geslachtvar = filter_var($Geslacht, FILTER_SANITIZE_SPECIAL_CHARS);
    $wachtwoord1var = filter_var($Wachtwoord1, FILTER_SANITIZE_SPECIAL_CHARS);
    $wachtwoord2var = filter_var($Wachtwoord2, FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($voornaamvar)){
        $message="Voornaam is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    if(empty($achternaamvar)){
        $message="Achternaam is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    if(empty($Geboortedatum)){
        $message="Geboortedatum is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    if(empty($emailvar)){
        $message="Email is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    if (filter_var($emailvar, FILTER_VALIDATE_EMAIL) === false) {
        $message="$emailvar Is geen geldige Email";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    if(empty($wachtwoord1var)){
        $message="Wachtwoord is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    if(empty($wachtwoord1var)){
        $message="Herhaal uw wachtwoord";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    if ($wachtwoord1var !== $wachtwoord2var) {
        $message="De wachtwoorden komen niet overeen!";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    if(empty($Mobiel)){
        $message="Mobiel is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    if(!preg_match("/^[0-9]{10}+$/", $Mobiel)) {
        $message="Ongeldig mobiele nummer";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    // Validation and field insertion
    $query = $pdo->prepare("SELECT `Email` FROM `user` WHERE `Email` = ?" );
    $query->bindValue( 1, $emailvar);
    $query->execute();

    if( $query->rowCount() > 0 ) { # If rows are found for query
        $message="Email is al in gebruik!";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    $query = $pdo->prepare("SELECT `Mobiel` FROM `user` WHERE `Mobiel` = ?" );
    $query->bindValue( 1, $Mobiel );
    $query->execute();

    if( $query->rowCount() > 0 ) { # If rows are found for query
        $message="Mobiel is al in gebruik";
        $_SESSION["error"] = $message;
        header("location: register.php");
        exit();
    }

    $Wachtwoord = password_hash($wachtwoord1var, PASSWORD_BCRYPT, array("cost" => 12));

    $query = "INSERT INTO user (Voornaam, Achternaam, Geslacht, Geboortedatum, Email, Wachtwoord, Mobiel) VALUES (?,?,?,?,?,?,?)";
    $query = $pdo->prepare($query);
    /*$query->bindParam('1', $voornaamvar);
    $query->bindParam('2', $achternaamvar);
    $query->bindParam('3', $geslachtvar);
    $query->bindParam('4', $Geboortedatum);
    $query->bindParam('5', $emailvar);
    $query->bindParam('6', $Wachtwoord);
    $query->bindParam('7', $Mobiel);
    $query->execute();*/
    $query->execute([$voornaamvar, $achternaamvar, $geslachtvar, $Geboortedatum, $emailvar, $Wachtwoord, $Mobiel]);
    if($query->rowCount() >0){
        header('location: login.php');
        exit();
    }
    $message="Er ging iets mis bij de registratie probeer het opnieuw";
    $_SESSION["error"] = $message;
    header('location: register.php');
    exit();
}

if(isset($_POST['login'])){

    $message="De combinatie Email en Wachtwoord is incorrect!";

    //Retrieve the field values from our login form.
    $Email = !empty($_POST['Email']) ? trim($_POST['Email']) : null;
    $Wachtwoordlogin = !empty($_POST['Wachtwoord']) ? trim($_POST['Wachtwoord']) : null;
    $emailvar = filter_var($Email, FILTER_SANITIZE_EMAIL);
    $wachtwoordvar = filter_var($Wachtwoordlogin, FILTER_SANITIZE_SPECIAL_CHARS);

    //Retrieve the user account information for the given username.
    $sql = "SELECT Voornaam, Achternaam, ID, Wachtwoord, Email FROM user WHERE Email = :Email";
    $stmt = $pdo->prepare($sql);



    //Bind value.
    $stmt->bindValue(':Email', $emailvar);

    //Execute.
    $stmt->execute();

    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
        $_SESSION["error"] = $message;
        header("location: login.php");
        exit();
    } else{
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.

        //Compare the passwords.
        $validPassword = password_verify($Wachtwoordlogin, $user['Wachtwoord']);

        //If $validPassword is TRUE, the login has been successful.
        if($validPassword){
            //Provide the user with a login session.
            $_SESSION['sess_Voornaam'] = $user['Voornaam'];
            $_SESSION['sess_Achternaam'] = $user['Achternaam'];
            $_SESSION['sess_ID'] = $user['ID'];

            //Redirect to our protected page, which we called home.php
            header('Location: dashboard.php');
            exit;

        } else{
            //$validPassword was FALSE. Passwords do not match.
            $_SESSION["error"] = $message;
            header("location: login.php");
            exit();
        }
    }
}