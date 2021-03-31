<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title --> 
    <title>Template</title>

</head>

<body id="page-top" class="bg-gradient-primary">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- SELECT NAVIGATION BAR -->
        <?php //include_once 'navdash.html' ?>
        <?php //include_once 'navbar.html' ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Top Navigation Bar -->
                <?php //include_once 'Topbar.php' ?>

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- PAGE CONTENT GOES HERE -->

                </div>

            </div>

            <!-- Footer -->
            <?php //include_once 't_footer.html' ?>

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