<?php
    include(dirname(__FILE__).'/../Modeles/latestdiscussion.php');
    $db=connectDb();
    // $qw="select * from user where mail='$mail';";
    // $exe=mysqli_query($db,$qw);
    // $result=mysqli_fetch_assoc($exe);
    $result=array();
    $result=get_latest_discussion($db);
    if (!$result) 
    {
        header("Location: /../Vues/signin.php?ErreurGetLatestDiscuu");
    }