<?php
    if(isset($_POST['name']) and isset($_POST['mail']) and isset($_POST['password']))
        {
            $name=$_POST['name'];
            $mail=$_POST['mail'];
            $password=$_POST['password'];
            // $db=$_SESSION['db'];
            include(dirname(__FILE__).'/../Modeles/signup.php');
            create_user($db,$name,$mail,$password);
            $user=get_user($db,$mail);
            $_SESSION['user_id']=$user['user_id'];
            header("Location: /../Vues/home.php");
        }
    else{ header("Location: /../Vues/signup.php");}