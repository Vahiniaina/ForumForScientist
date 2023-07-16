<?php
    session_start();
    include(dirname(__FILE__).'/../Modeles/deleteProfile.php');
    $db=connectDb();
    $password=$_POST['password'];
    $user_id=$_POST['user_id'];
    $result=get_user_info($db,$user_id);
    $hash=$result['passwor'];
    if(password_verify($password, $hash))
        {
            if(delete_user($db,$user_id))
            {
                $_SESSION['state']="loggedout";
                header("Location: /../Forum../Vues/home.php?ProfileDeletedAndLoggedOut");
            }
            else header("/Vues/deleteProfile.php?user_id=".$user_id."+FalseDeleteUser");
        } 
    else header("/Vues/deleteProfile.php?user_id=".$user_id."PasswordDontMatch");
    