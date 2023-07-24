<?php
    session_start();
    include(dirname(__FILE__).'/../Modeles/deleteGroup.php');
    $db=connectBDD();
    $password=$_POST['password'];
    $user_id=$_POST['user_id'];
    $group_id=$_POST['group_id'];
    $qw="select * from user where user_id='$user_id';";
    $exe=mysqli_query($db,$qw);
    $result=mysqli_fetch_assoc($exe);
    if ($result) {
        $hash=$result['passwor'];
        if(password_verify($password, $hash))
        {
            $qw2="delete from groupe where group_id='$group_id';";
            $exe2=mysqli_query($db,$qw2);
            header("Location: /../Forum/Vues/profile.php?user_id=".$user_id."&e=DeletedSuccesfully");
        } 
        else header("Location: /../Forum/Vues/deleteGroup.php?user_id=".$user_id."&group_id=".$groupr_id."&e=WrongPassword");
    }
    else 
    {
        header("Location: /../Forum/Vues/deleteGroup.php?user_id=".$user_id."&group_id=".$group_id);
    }




    