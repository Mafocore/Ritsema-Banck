<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title --> 
    <title>Wachtwoord Vergeten</title>

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
                                        <h1 class="h4 text-gray-900 mb-2">Wachtwoord vergeten?</h1>
                                        <p class="mb-4">Vul je email en geboortedatum in.</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control"
                                                id="dateOfBirth" aria-describedby="Geboortedatum"
                                                placeholder="Geboortedatum">
                                        </div>
                                        <a href="reset-password.php" class="btn btn-primary btn-user btn-block">
                                            Herstel wachtwoord opvragen
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