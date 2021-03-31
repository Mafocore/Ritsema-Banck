<?php

    session_start();

    unset($_SESSION['sess_Voornaam']);
    unset($_SESSION['sess_Achternaam']);
    unset($_SESSION['sess_ID']);

    session_destroy();

    header("location: login.php");
?>
