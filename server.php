<?php
session_start();

// initializing variables
$Voornaam = "";
$Achternaam = "";
$Gender = "";
$Geboortedatum = "";
$Email = "";
$Wachtwoord = "";
$Wachtwoord1 = "";
$Wachtwoord2 = "";
$Mobiel = "";
$Straat = "";
$Huisnummer = "";
$Toevoeging = "";
$Postcode = "";
$Woonplaats = "";

$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');

// REGISTER USER
if (isset($_POST['reg_persoon'])) {
    // receive all input values from the form
    $Voornaam = mysqli_real_escape_string($db, $_POST['Voornaam']);
    $Achternaam = mysqli_real_escape_string($db, $_POST['Achternaam']);
    $Gender = mysqli_real_escape_string($db, $_POST['Gender']);
    $Geboortedatum = mysqli_real_escape_string($db, $_POST['Geboortedatum']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Wachtwoord1 = mysqli_real_escape_string($db, $_POST['Wachtwoord']);
    $Wachtwoord2 = mysqli_real_escape_string($db, $_POST['Wachtwoord2']);
    $Mobiel = mysqli_real_escape_string($db, $_POST['Mobiel']);
    $Straat = mysqli_real_escape_string($db, $_POST['Straat']);
    $Huisnummer = mysqli_real_escape_string($db, $_POST['Huisnummer']);
    $Toevoeging = mysqli_real_escape_string($db, $_POST['Toevoeging']);
    $Postcode = mysqli_real_escape_string($db, $_POST['Postcode']);
    $Woonplaats = mysqli_real_escape_string($db, $_POST['Woonplaats']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($Voornaam)) { array_push($errors, "Username is required"); }
    if (empty($Achternaam)) { array_push($errors, "Email is required"); }
    if (empty($Wachtwoord1)) { array_push($errors, "Password is required"); }
    if (empty($Wachtwoord2)) { array_push($errors, "Password is required"); }
    if (empty($Gender)) { array_push($errors, "Gender is required"); }
    if (empty($Geboortedatum)) { array_push($errors, "Date is required"); }
    if (empty($Email)) { array_push($errors, "E-mail is required"); }
    if (empty($Mobiel)) { array_push($errors, "Mobile is required"); }
    if (empty($Straat)) { array_push($errors, "Street is required"); }
    if (empty($Huisnummer)) { array_push($errors, "Housenumber is required"); }
    if (empty($Postcode)) { array_push($errors, "Postcode is required"); }
    if (empty($Woonplaats)) { array_push($errors, "Woonplaats is required"); }
    if (Wachtwoord1 != Wachtwoord2) {
        array_push($errors, "Wachtwoorden komen niet overeen");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM user WHERE Email='$Email' OR Mobiel='$Mobiel' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['Email'] === $Email) {
            array_push($errors, "Email is al in gebruik");
        }

        if ($user['Mobiel'] === $Mobiel) {
            array_push($errors, "Nummer is al in gebruik");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) === 0) {
        $Wachtwoord = md5($Wachtwoord1);//encrypt the password before saving in the database

        $query = "INSERT INTO user (Voornaam, Achternaam, Gender, Geboortedatum, Email, Wachtwoord, Mobiel, Straat, Huisnummer, Toevoeging, Postcode, Woonplaats) 
  			  VALUES('$Voornaam', '$Achternaam', '$Gender', '$Geboortedatum', '$Email', '$Wachtwoord', '$Mobiel', '$Straat', '$Huisnummer', '$Toevoeging', '$Postcode', '$Woonplaats' )";
        mysqli_query($db, $query);
        $_SESSION['Email'] = $Email;
        $_SESSION['success'] = "You are now logged in";
        header('location: dashboard.php');
    }
}

// ...