<?php
    session_start();
    $_SESSION['mail']='';
    $_SESSION['user_id']='';
    $_SESSION['state']="loggedout";
    header("Location: /../Forum../Vues/home.php?LoggedOut");