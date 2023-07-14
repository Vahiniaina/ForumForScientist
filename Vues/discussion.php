<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion</title>
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
    <div class="container">
            <a href="../Vues/reply.php?discussion_id=<?php echo $_GET['discussion_id']; ?>">Reply</a><br>
        <div class="table-responsive">
                    <h3>Discussions</h3>
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Author</th>
                                <th>Date</th>
                                <th>Sontent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include(dirname(__FILE__) . '/../Controllers/latestreplies.php');
                            foreach ($result as $res) 
                            {
                                echo "<tr>";
                                echo "<td></td><td>".$res['replier_id'] . "</td><td>" . $res['replies_date'] . " </td><td> <em>" . $res['content'] . "</em></td><td>" . $res['content']."</td>";
                                echo "</tr>";
                            }

                            ?>
                    </table>
        </div>
    </div>
    <!--Footer-->
    <?php include(dirname(__FILE__) . '/footer.php'); ?>
    
</body>
</html>