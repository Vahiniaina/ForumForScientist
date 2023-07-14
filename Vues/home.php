<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!--head-->

<head>
    <title>Acceuille</title>
    <meta charset="utf-8">
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
    <?php include(dirname(__FILE__) . '/header.php'); ?>
    <!-- Content -->
    <section>
        <div class="container">
            <a href="../Controllers/startAdiscussion.php">Start a discussion</a><br>
            <div class="table-responsive">
                <h3>Latest discussions</h3>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Topic</th>
                            <th>Author</th>
                            <th>Posting date</th>
                            <th>Content</th>
                            <th>Replies</th>
                            <th>Views /Votes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include(dirname(__FILE__) . '/../Controllers/latestdiscussion.php');
                        foreach ($result as $res) 
                        {
                            echo "<tr>";
                            echo "<td></td><td>".$res['topic'] . "</td><td>" . $res['starter_id'] . " </td><td> <em>" . $res['post_date'] . "</em></td><td>" . $res['content'] . "</td><td><a href=\"../Vues/discussion.php?discussion_id=".$res['discussion_id']."\">n replies</a></td><td><a href=\"../Controllers/viewAndVote.php?discussion_id=".$res['discussion_id']."\">m votes o views</a></td>";
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