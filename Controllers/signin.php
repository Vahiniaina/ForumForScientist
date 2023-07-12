<?php
    session_start();
    if(isset($_POST['mail']) and isset($_POST['password']))
    {
        $mail=$_POST['mail'];
        $password=$_POST['password'];
        include(dirname(__FILE__).'/../Modeles/signup.php');
        $db=connectDb();
        $qw="select * from user where mail='$mail';";
        $exe=mysqli_query($db,$qw);
        $result=mysqli_fetch_assoc($exe);
        // $result=array();
        // $result=get_user($db,$mail);
        if ($result) {
            $_SESSION['state']="connected";
            $_SESSION['mail']=$mail;
            $hash=$result['password'];
            if(password_verify($password, $hash)) header("Location: /../Forum/Vues/home.php?mail=".$mail);
            else header("Location: /../Forum/Vues/signin.php?ErrorWrongPassWord".$result['password']);
        }
        else 
        {
            $_SESSION['state']='deconnected';
            header("Location: /../Forum/Vues/signin.php?ErorWrongNamee");
        }
    }
    else{ header("Location: /../Forum/Vues/signin.php?InsertValidArray");}