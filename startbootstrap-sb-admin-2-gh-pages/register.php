<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title -->
    <title>Registreren - Ritsema Banck</title>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1>Ritsema Banck</h1>
                                <h1 class="h4 text-gray-900 mb-4">Maak een account aan!</h1>
                            </div>

                            <hr>

                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="exampleFirstName"
                                            placeholder="Voornaam">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="exampleLastName"
                                            placeholder="Achternaam">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" id="dateOfBirth"
                                        placeholder="Geboortedatum">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail"
                                        placeholder="E-mail">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control"
                                            id="exampleInputPassword" placeholder="Wachtwoord">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control"
                                            id="exampleRepeatPassword" placeholder="Herhaal wachtwoord">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phoneNumber"
                                        placeholder="Mobiel / Telefoon">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="streetname"
                                            placeholder="Straat">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control"
                                            id="exampleRepeatPassword" placeholder="Huisnummer">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="zipCode"
                                        placeholder="Postcode">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="city"
                                        placeholder="Woonplaats">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <a href="login.php" class="btn btn-primary btn-user btn-block">
                                            Registeer account
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">
                                                    <a href="#">Voorwaarden</a></label>
                                                <!-- In href, bestand locatie van voorwaarden.pdf -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                            </form>

                            <div class="text-center">
                                <a class="small" href="login.php">Heb je al een account? Login!</a>
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