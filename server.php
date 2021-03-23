<?php
session_start();
// PDO connect
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

if(isset($_POST['submit'])){

    //$Sessie = $_SESSION['ID']['Voornaam']['Achternaam']['Email'];

    $Voornaam = $_POST['Voornaam'];
    $Achternaam = $_POST['Achternaam'];
    $Gender = $_POST['Gender'];
    $Geboortedatum =$_POST['Geboortedatum'];
    $Email = $_POST['Email'];
    $Wachtwoord1 = $_POST['Wachtwoord1'];
    $Wachtwoord2 = $_POST['Wachtwoord2'];
    $Mobiel = $_POST['Mobiel'];
    $Straat = $_POST['Straat'];
    $Huisnummer = $_POST['Huisnummer'];
    $Toevoeging = $_POST['Toevoeging'];
    $Postcode = $_POST['Postcode'];
    $Woonplaats = $_POST['Woonplaats'];

    if ($Wachtwoord1 != $Wachtwoord2) {
        $errors[] = "Wachtwoorden komen niet overeen";
    }

    if($Voornaam==''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    if($Achternaam==''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    if($Geboortedatum==''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    if($Email==''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    if($Wachtwoord1==''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    if($Wachtwoord2==''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    if($Mobiel==''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    if($Straat==''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    if($Huisnummer==''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    if($Postcode==''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    if($Woonplaats==''){
        echo "<script>alert('Please enter your email!')</script>";
        exit();
    }

    // Validation and field insertion

    $query = $conn->prepare( "SELECT `Email` FROM `user` WHERE `email` = ?" );
    $query->bindValue( 1, $Email );
    $query->execute();

    if( $query->rowCount() > 0 ) { # If rows are found for query
        echo "Email found!";
    }
    else {
        echo "Email not found!";
    }

    $query = $conn->prepare( "SELECT `Mobiel` FROM `user` WHERE `Mobiel` = ?" );
    $query->bindValue( 1, $Mobiel );
    $query->execute();

    if( $query->rowCount() > 0 ) { # If rows are found for query
        echo "Email found!";
    }
    else {
        echo "Mobile not found!";
    }

    $options = [
            'cost' => 12,
    ];

    password_hash($Wachtwoord1, PASSWORD_BCRYPT, $options);//encrypt the password before saving in the database
    $Wachtwoord = $Wachtwoord1;

    $insert = $conn->prepare("INSERT INTO user (ID, Voornaam, Achternaam, Gender, Geboortedatum, Email, Wachtwoord, Mobiel, Straat, Huisnummer, Toevoeging, Postcode, Woonplaats) 
  			  VALUES(':ID', ':Voornaam', ':Achternaam', ':Gender', ':Geboortedatum', ':Email', ':Wachtwoord', ':Mobiel', ':Straat', ':Huisnummer', ':Toevoeging', ':Postcode', ':Woonplaats' )");
    $insert->bindParam(':ID', $ID);
    $insert->bindParam(':Voornaam', $Voornaam);
    $insert->bindParam(':Achternaam', $Achternaam);
    $insert->bindParam(':Gender', $Gender);
    $insert->bindParam(':Geboortedatum', $Geboortedatum);
    $insert->bindParam(':Email', $Email);
    $insert->bindParam(':Wachtwoord', $Wachtwoord);
    $insert->bindParam(':Mobiel', $Mobiel);
    $insert->bindParam(':Straat', $Straat);
    $insert->bindParam(':Huisnummer', $Huisnummer);
    $insert->bindParam(':Toevoeging', $Toevoeging);
    $insert->bindParam(':Postcode', $Postcode);
    $insert->bindParam(':Woonplaats', $Woonplaats);

    $insert->execute();

    header("location:login.php");
    exit();
}

// ...