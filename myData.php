<?php 
    require ('server.php');

    $sql = "SELECT Voornaam, Achternaam, Geslacht, Geboortedatum, Email, Mobiel FROM user WHERE ID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['sess_ID']]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

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

                                    <form class="user" method="post">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input name="firstname" type="text" class="form-control" id="exampleFirstName"
                                                    placeholder="<?php echo $user['Voornaam']?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="lastname" type="text" class="form-control" id="exampleLastName"
                                                    placeholder="<?php echo $user['Achternaam']?>">
                                            </div>
                                        </div>
                                        <div class="form-group input-group">
                                            <input name="sex" type="text" name="Geslacht" class="form-control"
                                                placeholder="<?php echo $user['Geslacht']?>" maxlength="200">
                                        </div>
                                        <div class="form-group">
                                            <input name="dateOfBirth" type="date" class="form-control" id="dateOfBirth"
                                                placeholder="Geboortedatum">
                                        </div>
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" id="exampleInputEmail"
                                                placeholder="<?php echo $user['Email']?>">
                                        </div>
                                        <div class="form-group">
                                            <input name="phone" type="text" class="form-control" id="phoneNumber"
                                                placeholder="<?php echo $user['Mobiel']?>">
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