<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!--head-->

<head>
    <title>Result</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
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
        <!-- if Group or reply or discussion and getSearchResult -->
        <?php 
            include(dirname(__FILE__) . '/../Controllers/searchResult.php');
        ?>
        <!-- Showing results -->
        <div class="container">
            <div class="table-responsive">
                <h3>Search results</h3>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th><?php echo $col1; ?></th>
                            <th><?php echo $col; ?></th>
                            <th><?php echo $col2; ?> date</th>
                            <th>Topic</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $res) 
                        {
                            echo "<tr>";
                            echo "<td>".$res['ids']."</td><td>" . $res['auth'] . " </td><td> <em>" . $res['dat'] . "</em></td><td>" . $res['topic'] . "</td><td>" . $res['content'] . "</td><td><a href=\"../Vues/".$type.".php?".$type."_id=".$res['id']."\">Enter</a></td>";
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