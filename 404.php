<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title --> 
    <title>Pagina niet gevonden</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Top Navigation Bar -->
                <?php //include_once 'Topbar.php' ?>

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- PAGE CONTENT GOES HERE -->
                    <!-- 404 Error Text -->
                    <div class="text-center" style="margin: 40vh 0;">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Pagina niet gevonden</p>
                        <p class="text-gray-500 mb-0">Er is iets fout gegaan, excuses voor het ongemak.</p>
                        <a href="index.php">&larr; Terug naar de Home pagina</a>
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