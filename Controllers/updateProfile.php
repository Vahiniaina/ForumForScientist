<?php
    // session_start();
    // include(dirname(__FILE__).'/../Modeles/updateProfile.php');
    // $db=connectBDD();
    // // $db=connectDb();
    // $password=$_POST['password'];
    // $user_id=$_POST['user_id'];
    // $qw="select * from user where user_id='$user_id';";
    // $exe=mysqli_query($db,$qw);
    // $result=mysqli_fetch_assoc($exe);
    // if ($result) {s
    //     $hash=$result['passwor'];
    //     if(password_verify($password, $hash))
    //     {
    //         // $_SESSION['state']="loggedout";
    //         // $qw2="delete from user where user_id='$user_id';";
    //         // $exe2=mysqli_query($db,$qw2);
    //         header("Location: /../Forum/Vues/home.php?UpateSuccesfully");
    //     } 
    //     else header("Location: /../Forum/Vues/deleteProfile.php?user_id=".$user_id."+PasswordDontMatch");
    // }
    // else 
    // {
    //     $_SESSION['state']='deconnected';
    //     header("Location: /../Forum/Vues/deleteProfile.php?user_id=".$user_id."+FalseDeleteUser+pw=".$hash);
    // } -->
    // $qw="select * from user where user_id='$user_id';";
    // $exe=mysqli_query($bdd,$qw);
    // $result=array();
    // $result=mysqli_fetch_assoc($exe);
    // if ($result) {
    //     $hash=$result['passwor'];
    //     if(password_verify($password, $hash))
    //     {
    //         if(isset($_POST['mail'])) update_mail($db,$_POST['mail'],$user_id);
    //         if(isset($_POST['name'])) update_name($db,$_POST['name'],$user_id);
    //         if(isset($_POST['npassword'])) update_password($db,$_POST['npassword'],$user_id);
    //         header("Location: /../Forum/Vues/profile.php?user_id=".$user_id."+afterChangeSucces");
    //     } 
    //     else header("Location: /../Forum/Vues/profile.php?user_id=".$user_id."+PasswordDontMatch");
    // }
    // else 
    // {
    //     $_SESSION['state']='deconnected';
    //     header("Location: /../Forum/Vues/profile.php?user_id=".$user_id."+FalseGetUser+pw=".$hash);
    // } -->

    session_start();
    include(dirname(__FILE__).'/../Modeles/updateProfile.php');
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
            if(isset($_POST['name']))
            {  
                $nam=$_POST['name'];
                $qw1="update user set nam='$nam' where user_id='$user_id';";
                $exe1=mysqli_query($db,$qw1);
            }
            if(isset($_POST['mail']))
            {  
                $mai=$_POST['mail'];
                $qw2="update user set mail='$mai' where user_id='$user_id';";
                $exe2=mysqli_query($db,$qw2);
            }
            if(isset($_POST['npassword']))
            {  
                $passwo=password_hash($_POST['npassword'],PASSWORD_DEFAULT);

                $qw3="update user set passwor='$passwo' where user_id='$user_id';";
                $exe3=mysqli_query($db,$qw3);
            }
            header("Location: /../Forum/Vues/profile.php?user_id=".$user_id."UpdateSuccesfully");
        } 
        else header("Location: /../Forum/Vues/updateProfile.php?user_id=".$user_id."+PasswordDontMatch");
    }
    else 
    {
        $_SESSION['state']='deconnected';
        header("Location: /../Forum/Vues/updateProfile.php?user_id=".$user_id."+FalseUpdateUser+pw=".$hash);
    }




    