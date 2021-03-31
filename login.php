<?php require ('server.php')?>
<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once ('t_head.html')?>

    <!-- Page Title -->
    <title>Inloggen - Ritsema Banck</title>

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
                                        <h1>Ritsema<img src="img/Klavervier.png" alt="Klavertje vier icoon" width="10%"
                                                height="10%"> Banck</h1>
                                        <h1 class="h4 text-gray-900 mb-4">Welkom terug!</h1>
                                    </div>
                                    <form method="post" name="submit">
                                        <div class="form-group row input-group">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input type="email" name="Email" class="form-control"
                                                    placeholder="Uw E-mail" maxlength="200">
                                            </div>
                                        </div>
                                        <div class="form-group row input-group">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input type="password" name="Wachtwoord" class="form-control"
                                                    placeholder="Wachtwoord" maxlength="200">
                                            </div>
                                        </div>
                                        <?php
                                        if(isset($_SESSION["error"])){
                                            $error = $_SESSION["error"];
                                            echo "<span>$error</span>";
                                        }
                                        ?>
                                        <div class="form-group row input-group">
                                            <div class="buttons col-sm-12 mb-3 mb-sm-0">
                                                <input type="submit" name="login" value="Inloggen"
                                                    class="btn btn-primary btn-user btn-block">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="">
                                <div class="p-5">
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <a class="small" href="forgot-password.php">Wachtwoord vergeten?</a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <a class="small" href="register.php">Maak een account aan!</a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
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
            </div>
        </div>
    </div>
</body>

<?php include_once ('t_footer_sticky.html')?>

</html>

<?php
unset($_SESSION["error"]);
?>