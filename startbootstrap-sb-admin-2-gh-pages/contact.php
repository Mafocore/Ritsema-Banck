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
                <?php include_once 'Topbar.html' ?>

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- Contact Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Contact Formulier</h6>
                        </div>
                        <div class="card-body">

                            <form class="user">
                                <div class="form-group">
                                    <label for="'subject">Onderwerp</label>
                                    <select class="form-control" id="subject">
                                        <option value="Mortgage">Hypotheek</option>
                                        <option value="MonneyAffairs">Geldzaken</option>
                                        <option value="Consultation">Adviesgesprek</option>
                                        <option value="Other">Overige</option>
                                    </select>
                                </div>
                                <label>Bericht</label>
                                <textarea class="form-control mb-4" style="min-height: 300px;"></textarea>
                                <a href="" class="btn btn-primary btn-user btn-block">
                                    Verstuur
                                </a>
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
                                    <h6 class="m-0 font-weight-bold text-primary">[Telefoon nummer]</h6>
                                    <p class="mt-2 mb-0">Beschikbaarheid</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="m-0 font-weight-bold text-primary">[Email]</h6>
                                    <p class="mt-2 mb-0">Reactietijd</p>
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