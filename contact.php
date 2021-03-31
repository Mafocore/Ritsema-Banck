<?php require ('send-mail.php') ?>
<?php require ('server.php')?>
<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title --> 
    <title>Contact - Ritsema Banck</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- SELECT NAVIGATION BAR -->
        <?php include_once 'navdash.html' ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Top Navigation Bar -->
                <?php include_once 'Topbar.php' ?>

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- Contact Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Contact Formulier</h6>
                        </div>
                        <div class="card-body">

                            <form method="post" class="user">
                                <div class="form-group">
                                    <label for="subject">Onderwerp</label>
                                    <select name="Subject" class="form-control" id="subject">
                                        <option value="Mortgage">Hypotheek</option>
                                        <option value="MonneyAffairs">Geldzaken</option>
                                        <option value="Consultation">Adviesgesprek</option>
                                        <option value="Other">Overige</option>
                                    </select>
                                </div>
                                <label>Bericht</label>
                                <textarea name="Message" class="form-control mb-4" style="min-height: 300px;"></textarea>
                                <input name="send" value="Verstuur" class="btn btn-primary btn-user btn-block">
                                    
                            </form>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <h6 class="m-0 font-weight-bold text-primary">OF</h6>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-phone-square m-1"></i>[Telefoon nummer]</h6>
                                    <p class="mt-2 mb-0">Ma-Vr 08:00-17:00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-envelope-square m-1"></i>[Email]</h6>
                                    <p class="mt-2 mb-0">Binnen een werkdag</p>
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