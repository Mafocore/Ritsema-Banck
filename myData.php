<?php require ('server.php')?>
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
                                            <select class="form-control" id="gender">
                                                <option value="" disabled selected>Maak uw keuze</option>
                                                <option value="Men">Man</option>
                                                <option value="Female">Vrouw</option>
                                                <option value="NonBinair">Non binair</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="dateOfBirth"
                                                placeholder="Geboortedatum">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail"
                                                placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phoneNumber"
                                                placeholder="Mobiel / Telefoon">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control" id="BSN">BSN: 089768574635</label>
                                        </div>
                                        <hr>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <a href="dashboard.php" class="btn btn-primary btn-user btn-block">
                                                    Opslaan
                                                </a>
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