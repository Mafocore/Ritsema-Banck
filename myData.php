<?php 
    require ('server.php');

    $sql = "SELECT Voornaam, Achternaam, Geslacht, Geboortedatum, Email, Mobiel FROM user WHERE ID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['sess_ID']]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST['Opslaan']))
    { 
    $Voornaam = $_POST['firstname'];
    $Achternaam = $_POST['lastname'];
    $Geslacht = $_POST['sex'];
    $Geboortedatum =$_POST['dateOfBirth'];
    $Email = $_POST['email'];
    $Telefoon = $_POST['phone'];

    $voornaamvar = filter_var($Voornaam, FILTER_SANITIZE_SPECIAL_CHARS);
    $achternaamvar = filter_var($Achternaam, FILTER_SANITIZE_SPECIAL_CHARS);
    $geslachtvar = filter_var($Geslacht, FILTER_SANITIZE_SPECIAL_CHARS);
    $geboortevar = filter_var($Geboortedatum, FILTER_SANITIZE_SPECIAL_CHARS);
    $emailvar = filter_var($Email, FILTER_SANITIZE_EMAIL);
    $telefoonvar = filter_var($Telefoon, FILTER_SANITIZE_SPECIAL_CHARS);    #anders doen

    if(empty($voornaamvar)){
        $message="Voornaam is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: myData.php");
        exit();
    }

    if(empty($achternaamvar)){
        $message="Achternaam is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: myData.php");
        exit();
    }

    if(empty($geslachtvar)){
        $message="Geslacht is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: myData.php");
        exit();
    }

    if(empty($geboortevar)){
        $message="Geboortedatum is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: myData.php");
        exit();
    }

    if(empty($emailvar)){
        $message="Email is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: myData.php");
        exit();
    }

    if (filter_var($emailvar, FILTER_VALIDATE_EMAIL) === false) {
        $message="$emailvar Is geen geldige Email";
        $_SESSION["error"] = $message;
        header("location: myData.php");
        exit();
    }
    if(empty($telefoonvar)){
        $message="Mobiel is niet ingevuld";
        $_SESSION["error"] = $message;
        header("location: myData.php");
        exit();
    }

    if(!preg_match("/^[0-9]{10}+$/", $telefoonvar)) {
        $message="Ongeldig mobiele nummer";
        $_SESSION["error"] = $message;
        header("location: myData.php");
        exit();
    }


    $sql = "UPDATE user SET Voornaam=?, Achternaam=?, Geslacht=?, Geboortedatum=?, Email=?, Mobiel=? WHERE id=?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$voornaamvar, $achternaamvar, $geslachtvar, $geboortevar, $emailvar, $telefoonvar, $_SESSION['sess_ID']]);
    $_SESSION['sess_Voornaam']=$voornaamvar;
    $_SESSION['sess_Achternaam']=$achternaamvar;
    header("location: myData.php");
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title -->
    <title>Mijn Gegevens</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- SELECT NAVIGATION BAR -->
        <?php include_once 'navdash.html' ?>
        <?php //include_once 'navbar.html' ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Top Navigation Bar -->
                <?php include_once 'Topbar.php' ?>

                <div class="container">
                    <div class="col-xl-10 col-lg-12 col-md-9">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->

                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="text-gray-900 mb-4">Mijn Gegevens</h1>
                                    </div>

                                    <hr>

                                    <form class="user" method="post">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input name="firstname" type="text" class="form-control" id="exampleFirstName"
                                                    placeholder="<?php echo $user['Voornaam']?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="lastname" type="text" class="form-control" id="exampleLastName"
                                                    placeholder="<?php echo $user['Achternaam']?>">
                                            </div>
                                        </div>
                                        <div class="form-group input-group">
                                            <input name="sex" type="text" name="Geslacht" class="form-control"
                                                placeholder="<?php echo $user['Geslacht']?>" maxlength="200">
                                        </div>
                                        <div class="form-group">
                                            <input name="dateOfBirth" type="date" class="form-control" id="dateOfBirth"
                                                placeholder="Geboortedatum">
                                        </div>
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" id="exampleInputEmail"
                                                placeholder="<?php echo $user['Email']?>">
                                        </div>
                                        <div class="form-group">
                                            <input name="phone" type="text" class="form-control" id="phoneNumber"
                                                placeholder="<?php echo $user['Mobiel']?>">
                                        </div>
                                        <hr>

                                        <div class="form-group row">
                                            <div class="buttons col-sm-6 mb-3 mb-sm-0">
                                                <input type="Submit" name="Opslaan" value="Opslaan"
                                                    class="btn btn-primary btn-user btn-block">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <a href="dashboard.php" class="btn btn-secondary btn-user btn-block">
                                                    Annuleren
                                                </a>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include_once 't_footer.html' ?>

        </div>

    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <?php include_once 't_LogoutModal.html' ?>

    <!-- Sources Files -->
    <?php include_once 't_sources.html' ?>

</body>

</html>