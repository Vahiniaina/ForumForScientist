<?php
    session_start();
    if(isset($_GET['user_id']) and isset($_GET['group_id']))
        {
            $user_id=$_GET['user_id'];
            $group_id=$_GET['group_id'];
            include(dirname(__FILE__).'/../Modeles/removeFromGroup.php');
            $db=connectDb();
            if(delete_member($db, $group_id,$user_id)) header("Location: /../Forum/Vues/admin.php?group_id=".$_GET['group_id']);
            else header("Location: /../Forum/Vues/admin.php?group_id=".$_GET['group_id']."&e=ErrorDeleteMember");
          }
    else{ header("Location: /../Forum/Vues/admin.php?group_id=".$_GET['group_id']."&e=ErrorGetVariabbleIF");}