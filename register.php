<?php require ('server.php')?>
<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once ('t_head.html')?>

    <!-- Page Title -->
    <title>Registreren - Ritsema Banck</title>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-7 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1>Ritsema <img src="img/Klavervier.png" alt="Klavertje vier icoon" width="10%" height="10%"> Banck</h1>
                                        <h1 class="h4 text-gray-900 mb-4">Maak een account aan!</h1>
                                    </div>
                                    <form method="post" action="register.php" name="registerform">
                                        <div class="form-group row input-group">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" name="Voornaam" class="form-control"
                                                    placeholder="Voornaam" maxlength="200">
                                            </div>
                                            <div class="col-sm-6 input-group">
                                                <input type="text" name="Achternaam" class="form-control"
                                                    placeholder="Achternaam" maxlength="200">
                                            </div>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" name="Geslacht" class="form-control"
                                                placeholder="Geslacht" maxlength="200">
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="date" name="Geboortedatum" class="form-control"
                                                placeholder="Geboortedatum (DD-MM-JJJJ)" minlength="8" maxlength="8">
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="email" name="Email" class="form-control"
                                                placeholder="Uw E-mail" maxlength="200">
                                        </div>
                                        <div class="form-group row input-group">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" name="Wachtwoord1" class="form-control"
                                                    placeholder="Wachtwoord" maxlength="200">
                                            </div>
                                            <div class="col-sm-6 input-group">
                                                <input type="password" name="Wachtwoord2" class="form-control"
                                                    placeholder="Herhaal wachtwoord" maxlength="200">
                                            </div>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" name="Mobiel"
                                                placeholder="Mobiel / Telefoon" maxlength="14">
                                        </div>
                                        <div class="form-group row input-group">
                                            <div class="buttons col-sm-6 mb-3 mb-sm-0">
                                                <input type="submit" name="submit" value="Registeer account"
                                                    class="btn btn-primary btn-user btn-block">
                                            </div>
                                        </div>
                                        <?php
                                        if(isset($_SESSION["error"])){
                                            $error = $_SESSION["error"];
                                            echo "<span>$error</span>";
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Heb je al een account? Login!</a>
                            </div>
                            <hr>
                            <div class="col-sm-3 mb-12 -align-center">
                                <a href="index.php" class="btn btn-primary btn-user btn-block">
                                    <i class="fas fa-fw fa-home"></i>
                                    Home
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include_once ('t_footer_sticky.html')?>

</html>

<?php
unset($_SESSION["error"]);
?>