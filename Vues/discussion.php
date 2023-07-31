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
    <title>Discussion</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="SHORTCUT ICON" href="../assets/images//Forum_Picture.ico" />
    <link href="../assets/css/navbar-top-fixed.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body style="padding-top: 0 !important;">
    <!--Header-->
    <?php
        include(dirname(__FILE__) . '/header.php');
        include(dirname(__FILE__) . '/../Controllers/LikesAndViews.php');
     ?>
    <div class="container">
        <!-- Buttons and likes/Views -->
        <a href="../Vues/reply.php?discussion_id=<?php echo $_GET['discussion_id']; ?>">Reply</a><br>
        <a href="../Controllers/like.php?discussion_id=<?php echo $_GET['discussion_id']; ?>&user_id=<?php if(isset($_SESSION['user_id'])) echo $_SESSION['user_id']; ?>">Like</a>
        <br> <em> <?php echo $likes; ?> likes and <?php echo $views;?> views.</em>
        <!-- Discussion Info -->
        <div class="table-responsive">
                    <h3>Discussion Info</h3>
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Author</th>
                                <th>Date</th>
                                <th>Content</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include(dirname(__FILE__) . '/../Controllers/getDiscussion.php');
                            echo "<tr>";
                            echo "<td></td><td>".$result0['nam'] . "</td><td>" . $result0['post_date'] . " </td><td> <em>" . $result0['content'] . "</em></td>";
                            echo "</tr>";
                            ?>
                    </table>
        </div>
        <!-- Replies -->
        <div class="table-responsive">
                    <h3>Replies</h3>
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Author</th>
                                <th>Date</th>
                                <th>Content</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include(dirname(__FILE__) . '/../Controllers/latestreplies.php');
                            foreach ($result as $res) 
                            {
                                echo "<tr>";
                                echo "<td></td><td>".$res['nam'] . "</td><td>" . $res['replies_date'] . " </td><td> <em>" . $res['content'] . "</em></td>";
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