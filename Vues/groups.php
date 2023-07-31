<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="SHORTCUT ICON" href="../assets/images//Forum_Picture.ico" />
    <link href="../assets/css/navbar-top-fixed.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body  style="padding-top: 0 !important;">
    <!--Header-->
    <?php include(dirname(__FILE__) . '/header.php'); ?>
    <!-- Content -->
    <section>
        <div class="container">
            <a href="../Vues/createGroup.php?user_id=<?php echo $_SESSION['user_id'];?>">Create a group</a><br>
            <div class="table-responsive">
                <h3>Groups</h3>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Admin</th>
                            <th>Description</th>
                            <th>Accesibility</th>
                            <th>Topic</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include(dirname(__FILE__) . '/../Controllers/groupList.php');
                        foreach ($result as $res) 
                        {
                            echo "<tr>";
                            echo "<td></td><td>".$res['group_name'] . "</td><td>" . $res['nam'] . " </td><td>" . $res['descriptiones'] . "</td><td>".$res['accesibilty']."</td><td>".$res['topic']."</td><td><a href=\"../Vues/group.php?group_id=".$res['group_id']."\">Visit</a></td>";
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