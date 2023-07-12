<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!--head-->
<head>
    <title>Start a discussion</title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="../assets/css/navbar-top-fixed.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <!--Header-->
    <?php include(dirname(__FILE__).'/header.php'); ?>
    <!-- Content -->
    <section class="vh-100 bg-image " >
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <h2 class="text-uppercase text-center mb-5">SIGN IN</h2>

                                <form method="POST" action="/../Forum/Controllers/createAdiscussion.php" >

                                    <div class="form-outline mb-4">
                                        <label class="mail" for="mail">mail</label>
                                        <input type="text" id="mail" class="form-control form-control-lg"  name="mail"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" class="form-control form-control-lg" name="password" />
                                    </div>

                                    

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Sign In</button>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    <?php include(dirname(__FILE__).'/footer.php'); ?>
</body>
</html>