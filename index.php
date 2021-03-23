<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title -->
    <title>Home</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include_once 'navbar.html' ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php //include_once 'topbar.html' ?>

                <!-- Begin Page Content -->
                <div class="container">
                    <div class="shadow mb-4">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 100%;" src="img/hoofdkantoor.jpg" alt="">
                    </div>
                    <div class="text-center">
                    <h1 class="font-weight-bold text-primary" style="font-size: 50px">Ritsema 
                    <img src="img/Klavervier.png" alt="Klavertje vier icoon" width="4%" height="4%"> Banck</h1>

                        <h4 class="">Hypotheken voor landhuizen</h4>
                        <div class="card border mt-3">
                            <p class="m-4" style="text-align: justify">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit. Aenean commodo ligula eget dolor.
                                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                Nulla
                                consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                                felis eu
                                pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                                Aenean
                                vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                                ac,
                                enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi
                                vel
                                augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="m-0 font-weight-bold text-primary"><i
                                            class="fas fa-phone-square m-1"></i>[Telefoon nummer]</h6>
                                    <p class="mt-2 mb-0">Ma-Vr 08:00-17:00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="m-0 font-weight-bold text-primary"><i
                                            class="fas fa-envelope-square m-1"></i>[Email]</h6>
                                    <p class="mt-2 mb-0">Binnen 1 werkdag</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End of Main Content -->

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