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
    <title>Group</title>
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
            <a href="../Vues/joinGroup.php?user_id=<?php echo $_SESSION['user_id'];?>&group_id=<?php echo $_GET['group_id'];?>">Join group</a><br>
            <!-- Member List -->
            <div class="table-responsive">
                <h3>Member List</h3>
                <table class="table table-striped table-sm" >
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include(dirname(__FILE__) . '/../Controllers/memberList.php');
                        foreach ($result as $res) 
                        {
                            echo "<tr>";
                            echo "<td>".$res['iden']."</td><td>".$res['nam']."</td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>
            <!-- Discussion List -->
            <div class="table-responsive">
                <h3>Discussion List</h3>
                <table class="table table-striped table-sm" >
                    <thead>
                        <tr>
                            <th> ID</th>
                            <th>Author</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $res) 
                        {
                            echo "<tr>";
                            echo "<td>".$res['iden']."</td><td>".$res['nam']."</td>";
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