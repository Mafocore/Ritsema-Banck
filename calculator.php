<!-- Berekening kan mogelik niet accuraat zijn-->
<?php 

extract($_POST);
if(isset($save))
{
		$interest= 0.01 * $ch / 12;
        $groeigetal= (1 + $interest) ** (12*240);
        $annuiteit= (0.01 * $sn * $fn) / 12;
        $deelfactor= $interest * $groeigetal / ($groeigetal - 1);
      
        $resultaat = $annuiteit / $deelfactor;
        $res= round($resultaat);
        
		
}


?>
<!DOCTYPE html>
<html lang="nl">


<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title -->
    <title>Hypotheek berekenen</title>


</head>

<body id="page-top" class="bg-gradient-primary">



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- SELECT NAVIGATION BAR -->

        <?php include_once 'navbar.html' ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-12 col-md-9">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="">
                                    <!--<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->
                                    <div class="">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="mb-4">Bereken u maximale hypotheek</h1>
                                            </div>

                                            <form method="post">
                                                <table>
                                                    <tr>
                                                        <div class="form-group row input-group">
                                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                                <label>Bruto jaarinkomen in €</label>
                                                                <input type="number" name="fn" class="form-control"
                                                                    placeholder="" value="<?php  echo @$fn;?>">
                                                            </div>
                                                        </div>
                                                    </tr>
                                                    <tr>
                                                        <div class="form-group row input-group">
                                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                                <label> Woonquote in €</label>
                                                                <input type="number" name="sn" class="form-control"
                                                                    placeholder="" value="<?php  echo @$sn;?>">
                                                            </div>
                                                        </div>
                                                    </tr>
                                                    <tr>
                                                    <div class="form-group row input-group">
                                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                                <label> Hypotheekrente in %</label>
                                                                <input type="number" name="ch" class="form-control"
                                                                    placeholder="" value="<?php  echo @$ch;?>">
                                                            </div>
                                                        </div>
                                                    </tr>
                                                    <tr>
                                                        <div class="form-group row input-group">
                                                            <div class="buttons col-sm-12 mb-3 mb-sm-0">
                                                                <input type="submit" name="save" value="Berekenen"
                                                                    class="btn btn-primary btn-user btn-block">
                                                            </div>
                                                        </div>
                                                    </tr>
                                                    <tr>
                                                        <div class="form-group row input-group">
                                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                                <label>Hoeveel kunt u lenen:</label>
                                                                <input type="number" placeholder="" name="res"
                                                                    class="form-control" readonly="readonly"
                                                                    disabled="disabled" value="<?php  echo @$res;?>" />
                                                            </div>
                                                        </div>



                                                </table>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Top Navigation Bar -->
                <?php //include_once 'Topbar.php' ?>

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- PAGE CONTENT GOES HERE -->

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



    <!-- Sources Files -->
    <?php include_once 't_sources.html' ?>

</body>

</html>