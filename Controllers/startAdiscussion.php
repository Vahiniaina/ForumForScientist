<?php
    session_start();
    if(isset($_SESSION['state']))
    {
        if($_SESSION['state']=='connected') header("Location: ../Vues/startAdiscussion.php?Go");
        else header("Location: ../Vues/signin.php?state=mustSignInSessioIn");
    }
    else
    {
        $_SESSION['state']='deconnected';
        header("Location: ../Vues/signin.php?state=mustSignIn");
    }
?>