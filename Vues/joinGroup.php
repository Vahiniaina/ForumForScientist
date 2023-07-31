<?php 
    session_start();
    if(!isset($_SESSION['user_id'])) header("Location: /../forum/Vues/signin.php?SignInToCreateAGroup");
    if(isset($_SESSION['state']))
    {
        if($_SESSION['state']!='connected') header("Location: /../forum/Vues/home.php?e=AccesDenied");
    }
    else
    {
        header("Location: /../forum/Vues/home.php?e=AccesDenied");
    }
?>
<!DOCTYPE html>
<head>
    <title>Join Group</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="../assets/css/navbar-top-fixed.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<html>

<body style="padding-top: 0 !important;">
    <!--Header-->
    <?php include(dirname(__FILE__).'/header.php'); ?>
    <!--Contenu-->
    <section class="vh-100 " >
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <h2 class="text-uppercase text-center mb-5">Join Group</h2>

                                <form method="POST" action="/../Forum/Controllers/joinGroup.php">
                                    <div class="form-outline mb-4">
                                        <label class="message" for="message">Message</label>
                                        <input type="text" id="message" class="form-control form-control-lg"  name="message" required/>
                                    </div>
                                    <input type="hidden" name="user_id" value="<?php echo $_GET['user_id'] ; ?>">
                                    <input type="hidden" name="group_id" value="<?php echo $_GET['group_id'] ; ?>">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info btn-block btn-lg gradient-custom-4 text-body">Request to join</button>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!--Footer-->
    <section class="container">
        <?php include 'footer.php'; ?>
    </section>
</body>

</html>