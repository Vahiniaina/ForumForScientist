<?php
    session_start();
    include(dirname(__FILE__).'/../Modeles/updateProfile.php');
    $db=connectDb();
    $user_id=$_SESSION['user_id'];
    if(isset($_POST['mail'])) update_mail($db,$_POST['mail'],$user_id);
    // if(isset($_POST['name'])) update_name($db,$_POST['name'],$user_id);
    if(isset($_POST['password'])) update_password($db,$_POST['password'],$user_id);
    header("Location: ../Vues/profile.php?afterChange");