<?php include('server.php') ?>
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

                            <form method="post" action="register.php">
                                <?php include('errors.php'); ?>
                                <div class="form-group row input-group">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="Voornaam" class="form-control"
                                            value="<?php echo $Voornaam; ?>" placeholder="Voornaam">
                                    </div>
                                    <div class="col-sm-6 input-group">
                                        <input type="text" id="Achternaam" class="form-control"
                                            value="<?php echo $Achternaam;?>" placeholder="Achternaam">
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <input type="text" id="Gender" class="form-control" value="<?php echo $Gender;?>"
                                        placeholder="Geslacht">
                                </div>
                                <!--                                <div class="form-group input-group">-->
                                <!--                                    <select class="form-control" id="gender">-->
                                <!--                                        <option value="" disabled selected>Maak uw keuze</option>-->
                                <!--                                        <option value="Men">Man</option>-->
                                <!--                                        <option value="Female">Vrouw</option>-->
                                <!--                                        <option value="NonBinair">Anders</option>-->
                                <!--                                        <option value="Restant">Zeg ik liever niet</option>-->
                                <!--                                    </select>-->
                                <!--                                </div>-->
                                <div class="form-group input-group">
                                    <input type="text" id="Geboortedatum" class="form-control"
                                        value="<?php echo $Geboortedatum;?>" placeholder="Geboortedatum (DD-MM-JJJJ)">
                                </div>
                                <div class="form-group input-group">
                                    <input type="email" id="Email" class="form-control" value="<?php echo $Email;?>"
                                        placeholder="Uw E-mail">
                                </div>
                                <div class="form-group row input-group">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" id="Wachtwoord1" class="form-control"
                                            value="<?php echo $Wachtwoord1;?>" placeholder="Wachtwoord">
                                    </div>
                                    <div class="col-sm-6 input-group">
                                        <input type="password" id="Wachtwoord2" class="form-control"
                                            value="<?php echo $Wachtwoord2;?>" placeholder="Herhaal wachtwoord">
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <input type="text" class="form-control" id="Mobiel" value="<?php echo $Mobiel;?>"
                                        placeholder="Mobiel / Telefoon">
                                </div>
                                <div class="form-group row input-group">
                                    <div class="col-sm-6 mb-3 mb-sm-0 input-group">
                                        <input type="text" class="form-control" id="Straat"
                                            value="<?php echo $Straat;?>" placeholder="Straatnaam">
                                    </div>
                                    <div class="col-sm-3 input-group">
                                        <input type="text" class="form-control" id="Huisnummer"
                                            value="<?php echo $Huisnummer;?>" placeholder="HuisNr.">
                                    </div>
                                    <div class="col-sm-3 input-group">
                                        <input type="text" class="form-control" id="Postcode"
                                            value="<?php echo $Toevoeging;?>" placeholder="Toevoeging">
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <input type="text" class="form-control" id="Postcode"
                                        value="<?php echo $Postcode;?>" placeholder="Postcode">
                                </div>
                                <div class="form-group input-group">
                                    <input type="text" class="form-control" id="Woonplaats"
                                        value="<?php echo $Woonplaats;?>" placeholder="Woonplaats">
                                </div>

                                <div class="form-group row input-group">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <button type="submit" class="btn btn-primary btn-user btn-block"
                                            id="reg_persoon" href="login.php">
                                            Registeer account
                                        </button>
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
    <?php include_once 't_sources.html'
    
    
    
    
    ?>

</body>

</html>