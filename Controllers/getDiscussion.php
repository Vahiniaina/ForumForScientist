<?php
    include(dirname(__FILE__).'/../Modeles/getDiscussion.php');
    $db=connectDb();
    $result=array();
    $mail=$_SESSION['mail'];
    $result0=getDiscussion($db,$_GET['discussion_id']);