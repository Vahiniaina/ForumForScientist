<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Administration</title>
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
            <!-- Group managemnet -->
            <a href="../Vues/changeGroup.php?user_id=<?php echo $_SESSION['user_id'];?>&group_id=<?php echo $_GET['group_id'];?>">Change group</a><br>
            <a  class="text-danger" href="../Vues/deleteGroup.php?user_id=<?php echo $_SESSION['user_id'];?>&group_id=<?php echo $_GET['group_id'];?>">Delete group</a><br>
            <!-- Group Info -->
            <div class="table-responsive">
                <h3>Group info</h3>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Accesibility</th>
                            <th>Topic</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include(dirname(__FILE__) . '/../Controllers/getGroup.php');
                        echo "<tr>";
                        echo "<td>".$result['group_id'] . "</td><td>".$result['group_name'] . "</td><td>" . $result['descriptiones'] . "</td><td>".$result['accesibilty']."</td><td>".$result['topic']."</td>";
                        echo "</tr>";

                        ?>
                </table>
            </div>
            <!-- Member request -->
            <h3>Member Request</h3>
            <div class="table-responsive table-hover table-info">
                <table class="table table-striped table-sm" >
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include(dirname(__FILE__) . '/../Controllers/memberRequest.php');
                        foreach ($result1 as $res1) 
                        {
                            echo "<tr>";
                            echo "<td>".$res1['iden']."</td><td>".$res1['nam']."</td><td>".$res1['mes']."</td><td><a class=\"btn btn-danger btn-sm\" href=\"../Controllers/rejectRequest.php?group_id=".$_GET['group_id']."&user_id=".$res1['iden']."\">Reject</a> <a class=\"btn btn-info btn-sm\" href=\"../Controllers/acceptRequest.php?group_id=".$_GET['group_id']."&user_id=".$res1['iden']."\">Accept</a></td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>
            <!-- Member List -->
            <h3>Member List</h3>
            <div class="table-responsive">
                <table class="table table-striped table-sm" >
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include(dirname(__FILE__) . '/../Controllers/memberListAdmin.php');
                        foreach ($result as $res) 
                        {
                            echo "<tr>";
                            echo "<td>".$res['iden']."</td><td>".$res['nam']."</td><td><a class=\"btn btn-danger btn-sm\" href=\"../Controllers/removeFromGroup.php?group_id=".$_GET['group_id']."&user_id=".$res['iden']."\">Remove</a></td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--Footer-->
    <?php include(dirname(__FILE__) . '/footer.php'); ?>
</body>
</html>