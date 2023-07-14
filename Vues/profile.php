<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="../assets/css/navbar-top-fixed.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <!--Header-->
    <?php include(dirname(__FILE__) . '/header.php'); ?>
    <!-- Content -->
    <section>
        <div class="container">
            <a href="../Vues/changeProfile.php?user_id=<?php echo $_SESSION['user_id'];?>">Change profile</a><br>
            <?php include(dirname(__FILE__) . '/../Controllers/getProfile.php'); ?>
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
                            echo "<td></td><td>".$res['group_name'] . "</td><td>" . $res['descriptiones'] . "</td><td>".$res['accesibilty']."</td><td>".$res['topic']."</td><td><a href=\"../Controllers/group.php?group_id=".$res['group_id']."\">Visit</a></td>";
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