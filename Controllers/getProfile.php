<?php
    include(dirname(__FILE__).'/../Modeles/getProfile.php');
    $db=connectDb();
    $result=array();
    $user_id=$_SESSION['user_id'];
    $result=get_Profile($db,$user_id);