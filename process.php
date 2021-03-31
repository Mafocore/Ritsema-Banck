<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title --> 
    <title>Mijn Process</title>

</head>

<body id="page-top" class="bg-gradient-primary">

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

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- PAGE CONTENT GOES HERE -->
                    <div class="progress mb-4">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Aanvraag is ontvangen</h6>
                        </div>
                        <div class="card-body">
                            <p>Uw aanvraag is ontvangen. Uw aanvraag wordt verwerkt binnen 5 werkdagen.</p>                        
                        </div>

                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Uw gegevens worden verwerkt</h6>
                        </div>
                        <div class="card-body">
                            <p>Uw gegevens zijn ontvangen en worden nu verwerkt. Resultaat binnen 5 werkdagen.</p>                        
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