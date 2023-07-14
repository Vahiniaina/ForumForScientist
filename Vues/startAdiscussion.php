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
                                <h2 class="text-uppercase text-center mb-5">START A DISCUSSION</h2>

                                <form method="POST" action="/../Forum/Controllers/createAdiscussion.php" >

                                    <div class="form-outline mb-4">
                                        <label class="topic" for="topic">Topic</label>
                                        <input type="text" id="topic" class="form-control form-control-lg"  name="topic" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="content">Content</label>
                                        <textarea type="text" id="content" class="form-control form-control-lg" name="content"  required></textarea>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="group">Group</label>
                                        <input type="text" id="group" class="form-control form-control-lg" name="group" />
                                    </div>

                                    <input type="hidden" id="user" class="form-control form-control-lg" name="user_id" value="<?php echo $_SESSION['user_id'] ;?>" />

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Start</button>
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