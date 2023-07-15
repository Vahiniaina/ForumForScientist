<?php
    include(dirname(__FILE__).'/../Modeles/MygroupList.php');
    $db=connectDb();
    $result=array();
    $user_id=$_SESSION['user_id'];
    $result=get_My_list_group($db,$user_id);