<?php
    include(dirname(__FILE__).'/../Modeles/getProfile.php');
    $db=connectDb();
    $result=array();
    $mail=$_SESSION['mail'];
    $result=get_Profile($db,$mail);