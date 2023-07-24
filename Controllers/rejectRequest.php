<?php
    session_start();
    if(isset($_GET['user_id']) and isset($_GET['group_id']))
        {
            $user_id=$_GET['user_id'];
            $group_id=$_GET['group_id'];
            include(dirname(__FILE__).'/../Modeles/rejectRequest.php');
            $db=connectDb();
            if(reject_request($db, $group_id,$user_id)) header("Location: /../Forum/Vues/admin.php?group_id=".$_GET['group_id']."&user_id=".$_SESSION['user_id']);
            else header("Location: /../Forum/Vues/admin.php?group_id=".$_GET['group_id']."&user_id=".$_SESSION['user_id']."&e=ErrorRejecttRequest");
          }
    else{ header("Location: /../Forum/Vues/admin.php?group_id=".$_GET['group_id']."&user_id=".$_SESSION['user_id']."&e=ErrorGetVariabbleIF");}