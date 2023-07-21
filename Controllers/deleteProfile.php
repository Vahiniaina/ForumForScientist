<?php
    session_start();
    include(dirname(__FILE__).'/../Modeles/deleteProfile.php');
    $db=connectBDD();
    $password=$_POST['password'];
    $user_id=$_POST['user_id'];
    $qw="select * from user where user_id='$user_id';";
    $exe=mysqli_query($db,$qw);
    $result=mysqli_fetch_assoc($exe);
    if ($result) {
        $hash=$result['passwor'];
        if(password_verify($password, $hash))
        {
            $_SESSION['state']="loggedout";
            $qw2="delete from user where user_id='$user_id';";
            $exe2=mysqli_query($db,$qw2);
            header("Location: /../Forum/Vues/home.php?LoggedOutSuccesfully");
        } 
        else header("Location: /../Forum/Vues/deleteProfile.php?user_id=".$user_id."+PasswordDontMatch");
    }
    else 
    {
        $_SESSION['state']='deconnected';
        header("Location: /../Forum/Vues/deleteProfile.php?user_id=".$user_id."+FalseDeleteUser+pw=".$hash);
    }




    