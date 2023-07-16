<?php
    session_start();
    if(isset($_POST['name']) and isset($_POST['mail']) and isset($_POST['password']))
        {
            $name=$_POST['name'];
            $mail=$_POST['mail'];
            // $password=$_POST['password'];
            $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
            include(dirname(__FILE__).'/../Modeles/signup.php');
            $db=connectDb();
            if(test_user_mail($db,$mail)== TRUE)
            {
                create_user($db,$name,$mail,$password);
                $user=get_user($db,$mail);
                $_SESSION['user_id']=$user['user_id'];
                $_SESSION['mail']=$mail;
                $_SESSION['state']="connected";
                header("Location: /../Forum../Vues/home.php?SignUpSucces");
            }
            else header("Location: /../Forum../Vues/signup.php?EmailDejaUtiliser");
        }
    else{ header("Location: /../Forum../Vues/signup.php?EntrerDEsValeurVAlide");}