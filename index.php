<?php 
    //On démarre la session
    session_start();
    $_SESSION['user_id'];
    if(isset($_COOKIE[$user_id])){$_SESSION['user_id']=$_COOKIE[$user_id];}
    // try{
    //     $db = new PDO("mysql:host=localhost;dbname=forum", 'root', '');
    //     $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    //     }
    // catch (Exception $e)
    //     {
    //         die('Erreur : ' . $e->getMessage());
    //     }
    header("Location: Vues/home.php");