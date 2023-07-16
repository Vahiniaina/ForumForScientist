<?php
    session_start();
    include(dirname(__FILE__).'/../Modeles/updateProfile.php');
    $db=connectDb();
    $password=$_POST['password'];
    $user_id=$_POST['user_id'];
    $result=get_user_info($db,$user_id);
    $hash=$result['passwor'];
    if(password_verify($password, $hash))
        {
            if(isset($_POST['mail'])) update_mail($db,$_POST['mail'],$user_id);
            if(isset($_POST['name'])) update_name($db,$_POST['name'],$user_id);
            if(isset($_POST['npassword'])) update_password($db,$_POST['npassword'],$user_id);
            header("/Vues/profile.php?user_id=".$user_id."+afterChange");
        } 
    else header("/Vues/profile.php?user_id=".$user_id."PasswordDontMatch");
    