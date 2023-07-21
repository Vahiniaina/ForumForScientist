<?php
    session_start();
    include(dirname(__FILE__).'/../Modeles/updateProfile.php');
    $bdd=connectBDD();
    // $db=connectDb();
    $password=$_POST['password'];
    $user_id=$_POST['user_id'];
    $qw="select * from user where user_id='$user_id';";
    $exe=mysqli_query($bdd,$qw);
    $result=mysqli_fetch_assoc($exe);
    if ($result) {
        $hash=$result['passwor'];
        if(password_verify($password, $hash))
        {
            if(isset($_POST['mail'])) update_mail($db,$_POST['mail'],$user_id);
            if(isset($_POST['name'])) update_name($db,$_POST['name'],$user_id);
            if(isset($_POST['npassword'])) update_password($db,$_POST['npassword'],$user_id);
            header("Location: /../Forum/Vues/profile.php?user_id=".$user_id."+afterChangeSucces");
        } 
        else header("Location: /../Forum/Vues/profile.php?user_id=".$user_id."+PasswordDontMatch");
    }
    else 
    {
        $_SESSION['state']='deconnected';
        header("Location: /../Forum/Vues/profile.php?user_id=".$user_id."+FalseGetUser+pw=".$hash);
    }