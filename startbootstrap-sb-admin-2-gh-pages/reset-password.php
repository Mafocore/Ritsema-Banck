<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title -->
    <title>Wachtwoord veranderen</title>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1>Ritsema Banck</h1>
                                        <p class="mb-4">Wachtwoord opnieuw instellen</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                id="newPassword" aria-describedby="wachtwoord"
                                                placeholder="Nieuw Wachtwoord">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                id="repeatPassword" aria-describedby="herhaal wachtwoord"
                                                placeholder="Herhaal Wachtwoord">
                                        </div>
                                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Wachtwoord Bevestigen
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Terug naar de Login pagina</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sources Files -->
    <?php include_once 't_sources.html' ?>

</body>

</html>