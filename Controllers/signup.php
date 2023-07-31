<?php
    session_start();
    if(isset($_POST['name']) and isset($_POST['mail']) and isset($_POST['password']) and isset($_POST['password2']))
        {
            $name=$_POST['name'];
            $mail=$_POST['mail'];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $e = "Only letters and white space allowed";
                header("Location: /../Forum/Vues/signup.php?e=".$e);
            }
            // check if e-mail address is well-formed
            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $e = "Invalid email format";
                header("Location: /../Forum/Vues/signup.php?e=".$e);
            }
            // Test ifthe 2 password matches
            if($_POST['password']!=$_POST['password2']) header("Location: /../Forum/Vues/signup.php?e=EmailDejaUtiliser");
            // hash the password
            $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
            // includng the model
            include(dirname(__FILE__).'/../Modeles/signup.php');
            // connect to DB and testmail then creste user
            $db=connectDb();
            if(test_user_mail($db,$mail)== TRUE)
            {
                create_user($db,$name,$mail,$password);
                $user=get_user($db,$mail);
                $_SESSION['user_id']=$user['user_id'];
                $_SESSION['mail']=$mail;
                $_SESSION['state']="connected";
                header("Location: /../Forum/Vues/home.php?e=SignUpSucces");
            }
            else header("Location: /../Forum/Vues/signup.php?e=EmailDejaUtiliser");
        }
    else{ header("Location: /../Forum/Vues/signup.php?e=EntrerDEsValeurVAlide");}