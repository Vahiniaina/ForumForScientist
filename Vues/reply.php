<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply</title>
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
    <!--Contenu-->
    <section class="vh-100 ">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <h2 class="text-uppercase text-center mb-5">SIGN IN</h2>

                                <form method="POST" action="/../Forum/Controllers/creatReplies.php" >

                                    <div class="form-outline mb-4">
                                        <label class="content" for="ontent">Content</label>
                                        <textarea type="text" id="content" class="form-control form-control-lg"  name="content"></textarea>
                                    </div>
                                    <input type="hidden" id="password" class="form-control form-control-lg" name="replier_id"  value="<?php echo $_SESSION['user_id'];?>" />
                                    <input type="hidden" id="password" class="form-control form-control-lg" name="discussion_id" value="<?php echo $_GET['discussion_id'];?>" />
                                    

                                    

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Reply</button>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!--Footer-->
    <?php include 'footer.php'; ?>
</body>
</html>