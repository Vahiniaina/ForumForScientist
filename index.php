<?php 
    //On démarre la session
    session_start();
    $_SESSION['user_id'];
    header("Location: Vues/home.php");