<!DOCTYPE html>
<html lang="nl">

<head>

    <?php include_once 't_head.html'; ?>

    <!-- Page Title -->
    <title>Inloggen - Ritsema Banck</title>

</head>

<body class="bg-gradient-primary">
<?php include_once 't_sources.html';
    session_start();
    include("db.php");
       
    $msg = ""; 
    if(isset($_POST['submitBtnLogin'])) {
      $email = trim($_POST['email']);
      $password = trim($_POST['password']);
      if($email != "" && $password != "") {
        try {
          $query = "select * from `user_login` where `email`=:email and `password`=:password";
          $stmt = $db->prepare($query);
          $stmt->bindParam('email', $email, PDO::PARAM_STR);
          $stmt->bindValue('password', $password, PDO::PARAM_STR);
          $stmt->execute();
          $count = $stmt->rowCount();
          $row   = $stmt->fetch(PDO::FETCH_ASSOC);
          if($count == 1 && !empty($row)) {
            /******************** Your code ***********************/
            $_SESSION['sess_user_id']   = $row['uid'];
            $_SESSION['sess_user_name'] = $row['username'];
            $_SESSION['sess_name'] = $row['name'];
           
          } else {
            $msg = "Ongeldig e-mail of wachtwoord";
          }
        } catch (PDOException $e) {
          echo "Error : ".$e->getMessage();
        }
      } else {
        $msg = "Voer beide velden in!";
      }
    }
    
    ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"> </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1>Ritsema Banck</h1>
                                        <h1 class="h4 text-gray-900 mb-4">Welkom terug!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                id="exampleInputPassword" placeholder="Wachtwoord">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Onthoud
                                                    mij</label>
                                            </div>
                                        </div>
                                        <a href="dashboard.php" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Wachtwoord vergeten?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Maak een account aan!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sources Files -->
    

</body>

</html>