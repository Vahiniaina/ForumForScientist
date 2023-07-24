<?php
    include(dirname(__FILE__).'/../Modeles/LikesAndViews.php');
    $db=connectDb();
    if(isset($_SESSION['user_id']) AND isset($_GET['discussion_id']))
    {
        addViews($db,$_GET['discussion_id'],$_SESSION['user_id']);
        $likes=0;
        $views=0;
        $likes=getLikes($db,$_GET['discussion_id']);
        $views=getViews($db,$_GET['discussion_id']);
    }
    if(isset($_GET['discussion_id']))
    {
        $likes=0;
        $views=0;
        $likes=getLikes($db,$_GET['discussion_id']);
        $views=getViews($db,$_GET['discussion_id']);
    }