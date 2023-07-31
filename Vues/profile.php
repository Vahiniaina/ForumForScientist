<?php
    session_start();
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
    <link rel="SHORTCUT ICON" href="../assets/images//Forum_Picture.ico" />
    <title>Profile</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="../assets/css/navbar-top-fixed.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body style="padding-top: 0 !important;">
    <!--Header-->
    <?php include(dirname(__FILE__) . '/header.php'); ?>
    <!-- Content -->
    <section>
        <div class="container">
            <?php include(dirname(__FILE__) . '/../Controllers/getProfile.php'); ?>
            <a href="../Vues/changeProfile.php?user_id=<?php echo $result['user_id'];?>">Change profile</a><br>
            <a  class="text-danger" href="../Vues/deleteProfile.php?user_id=<?php echo $result['user_id'];?>">Delete profile</a><br>
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            echo "<tr>";
                            echo "<td>".$result['user_id'] . "</td><td>" . $result['nam'] . "</td><td>".$result['mail']."</td></td>";
                            echo "</tr>";
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <h3>My group</h3>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Accesibility</th>
                            <th>Topic</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include(dirname(__FILE__) . '/../Controllers/MygroupList.php');
                        foreach ($result as $res) 
                        {
                            echo "<tr>";
                            echo "<td></td><td>".$res['group_name'] . "</td><td>" . $res['descriptiones'] . "</td><td>".$res['accesibilty']."</td><td>".$res['topic']."</td><td><a href=\"../Vues/admin.php?group_id=".$res['group_id']."\">Admin</a></td>";
                            echo "</tr>";
                        }

                        ?>
                </table>
            </div>
        </div>
    </section>
    <!--Footer-->
    <?php include(dirname(__FILE__) . '/footer.php'); ?>
</body>
</html>