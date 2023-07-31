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
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({"HTML-CSS": { preferredFont: "TeX", availableFonts: ["STIX","TeX"] },
            tex2jax: { inlineMath: [ ["$", "$"], ["\\\\(","\\\\)"] ], displayMath: [ ["$$","$$"], ["\\[", "\\]"] ], processEscapes: true, ignoreClass: "tex2jax_ignore|dno" },
            TeX: { noUndefined: { attributes: { mathcolor: "red", mathbackground: "#FFEEEE", mathsize: "90%" } } },
            messageStyle: "none"
        });
    </script> 
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="../MathJax-master/es5/tex-chtml.js" id="MathJax-script" async></script>
</head>

<body style="padding-top: 0 !important;">
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
                            <th>Topic</th>
                            <th>Author</th>
                            <th>Posting date</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include(dirname(__FILE__) . '/../Controllers/latestdiscussion.php');
                        foreach ($result as $res) 
                        {
                            
                            echo "<tr>";
                            echo "<td>".$res['topic'] . "</td><td>" . $res['nam'] . " </td><td> <em>" . $res['post_date'] . "</em></td><td>" ;
                            eval("echo '". addslashes($res['content'])."';");
                            echo "</td><td><a href=\"../Vues/discussion.php?discussion_id=".$res['discussion_id']."\">Enter</a></td>";
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