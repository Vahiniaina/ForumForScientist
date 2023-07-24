<?php
    session_start();
    $user_id=$_POST['user_id'];
    $messages=$_POST['message'];
    $group_id=$_POST['group_id'];
    include(dirname(__FILE__).'/../Modeles/joinGroup.php');
    $db=connectDb();
    if(create_request($db, $user_id, $messages, $group_id)) header("Location: /../Forum/Vues/groups.php?RequestSent");
    else header("Location: /../Forum/Vues/groups.php?RequestSendingError");