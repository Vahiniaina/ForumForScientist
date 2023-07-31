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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Group</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="SHORTCUT ICON" href="../assets/images//Forum_Picture.ico" />
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="../assets/css/navbar-top-fixed.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body style="padding-top: 0 !important;">
    
    <!--Header-->
    <?php include(dirname(__FILE__).'/header.php'); ?>
    <!--Contenu-->
    <section class="vh-100 ">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <h2 class="text-uppercase text-center mb-5">CREATE A GROUP</h2>

                                <form method="POST" action="/../Forum/Controllers/createGroup.php" >

                                    <div class="form-outline mb-4">
                                        <label class="group_name" for="group_name">Group_name</label>
                                        <input type="text" id="group_name" class="form-control form-control-lg"  name="group_name" required/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="topic" for="topic">Topic</label>
                                        <input type="text" id="topic" class="form-control form-control-lg"  name="topic" required/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="description" for="description">Description</label>
                                        <textarea type="text" id="description" class="form-control form-control-lg"  name="description"></textarea>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="accesibilty" for="accesibilty">Accesibilty</label>
                                        <select type="text" id="accesibilty" class="form-control form-control-lg"  name="accesibilty">
                                            <option value="public">public</option>
                                            <option value="private">private</option>
                                        </select>
                                    </div>
                                    
                                    <input type="hidden" id="user_id" class="form-control form-control-lg" name="user_id"  value="<?php echo $_SESSION['user_id'];?>" />
                                    

                                    

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Create</button>
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
