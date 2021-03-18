<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title -->
    <title>Hypotheek Aanvragen</title>

</head>

<body id="page-top" class="bg-gradient-primary">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- SELECT NAVIGATION BAR -->
        <?php include_once 'navdash.html' ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Top Navigation Bar -->
                <?php include_once 'Topbar.html' ?>

                <!-- Begin Page Content -->
                <div class="container">
                    <!-- Outer Row -->
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-12 col-md-9">
                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                    <!-- Nested Row within Card Body -->
                                    <div class="">
                                        <!--<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->
                                        <div class="">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="mb-4">Hypotheek Aanvragen</h1>
                                                </div>
                                                <form class="user">
                                                    <div class="form-group">
                                                        <label class="">Bruto jaarinkomen</label>
                                                        <input type="number" class="form-control" id="grossAnnualIncome"
                                                            placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="upload.php" method="post"
                                                            enctype="multipart/form-data">
                                                            <p>Werkgeversverklaring:</p>
                                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                                        </form>
                                                    </div>
                                                    <hr>
                                                    <!-- Partner -->
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox small">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="yesIBuyWithPartner">
                                                            <label class="custom-control-label"
                                                                for="yesIBuyWithPartner">
                                                                Ja, ik koop samen met mijn partner.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">Wat is je partner's naam?</label>
                                                        <input type="text" class="form-control" id="partnerName"
                                                            placeholder="Voor + Achternaam">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">Geboortedatum</label>
                                                        <input type="date" class="form-control" id="partnerDateOfBirth"
                                                            placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">Partner bruto jaarinkomen</label>
                                                        <input type="number" class="form-control"
                                                            id="partnerGrossAnnualIncome" placeholder="">
                                                    </div>

                                                    <!-- Schulden -->
                                                    <label>Schulden</label>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox small">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="yesIHaveDebt">
                                                            <label class="custom-control-label" for="yesIHaveDebt">
                                                                Ja, mijn partner en/of ik heb(ben) schulden.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">Totaalbedrag aan schulden</label>
                                                        <input type="number" class="form-control" id="totalDebt"
                                                            placeholder="">
                                                    </div>

                                                    <!-- Woning -->
                                                    <hr>
                                                    <label>Woning:</label>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox small">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="yesIFoundHouse">
                                                            <label class="custom-control-label" for="yesIFoundHouse">
                                                                Ja, ik heb al een huis gevonden.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="'houseType">Wat voor soort woning is het?</label>
                                                        <select class="form-control" id="houseType">
                                                            <option value="BestaandeWoning">Bestaande woning</option>
                                                            <option value="NieuwbouwWoning">Nieuwbouw woning</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Is de woning energiezuinig?</label>
                                                        <select class="form-control" id="energyEfficiency">
                                                            <option value="IdontKnow">Dat weet ik niet</option>
                                                            <option value="No">Nee</option>
                                                            <option value="DoubleA">(A++) Energielabel</option>
                                                            <option value="NullOnTheMeter">Nul op de meter</option>
                                                            <option value="NullOnTheMeterWithGaranty">Nul op de meter
                                                                met EP-garantie</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">Schatting van de koopprijs (of
                                                            marktwaarde)</label>
                                                        <input type="text" class="form-control" id="housePrice"
                                                            placeholder="">
                                                    </div>
                                                    <hr>

                                                    <!-- Hypotheek -->
                                                    <label>Over je hypotheek</label>

                                                    <div class="form-group">
                                                        <label>Heb je voorkeur voor een hypotheekvorm?</label>
                                                        <select class="form-control" id="energyEfficiency">
                                                            <option value="NoPreference">Geen voorkeur</option>
                                                            <option value="Annuïteitenhypotheek">Annuïteiten Hypotheek
                                                            </option>
                                                            <option value="Lineairehypotheek">Lineaire Hypotheek
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">Heb je voorkeur voor een looptijd? (In jaren)</label>
                                                        <input type="number" class="form-control" id="duration"
                                                            placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Heb je voorkeur voor een rentevaste periode?</label>
                                                        <select class="form-control" id="fixed-rate">
                                                            <option value="NoPreference">Geen voorkeur</option>
                                                            <option value="Gelijkaandelooptijd">Gelijk aan de looptijd
                                                            </option>
                                                            <option value="Variabel">Variabel</option>
                                                            <option value="5jaar">5 jaar</option>
                                                            <option value="10jaar">10 jaar</option>
                                                            <option value="15jaar">15 jaar</option>
                                                            <option value="20jaar">20 jaar</option>
                                                            <option value="25jaar">25 jaar</option>
                                                            <option value="30jaar">30 jaar</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">Hoeveel eigen geld wil je inbrengen?</label>
                                                        <input type="text" class="form-control" id="startCapital"
                                                            placeholder="">
                                                    </div>

                                                    <!-- Tot slot... -->
                                                    <div class="form-group">
                                                        <label>Heb je nog vragen of opmerkingen? Stel ze hier dan
                                                            gerust.</label>
                                                        <textarea class="form-control" id="questions"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox small">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="conditions">
                                                            <label class="custom-control-label" for="conditions">
                                                                <a href="#">Voorwaarden</a></label>
                                                            <!-- In href, bestand locatie van voorwaarden.pdf -->
                                                        </div>
                                                    </div>

                                                    <a href="#" class="btn btn-primary btn-user btn-block">
                                                        Offerte Aanvragen
                                                    </a>
                                                </form>
                                                <hr>
                                                <div class="text-center">
                                                    <a class="small" href="dashboard.php">Terug naar het dashboard</a>
                                                </div>
                                            </div>
                                        </div>
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