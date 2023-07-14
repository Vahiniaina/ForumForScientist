<?php
    session_start();
    if(isset($_POST['topic']) and isset($_POST['content']) and isset($_POST['user_id']))
        {
            $topic=$_POST['topic'];
            $content=$_POST['content'];
            $user_id=$_POST['user_id'];
            include(dirname(__FILE__).'/../Modeles/createAdiscussion.php');
            $db=connectDb();
            if(create_discussion($db, $topic, $content, $user_id)) header("Location: /../Forum../Vues/startAdiscussion.php?Successs");
            else header("Location: /../Forum../Vues/startAdiscussion.php?creatError");
            
        }
    else{ header("Location: /../Forum/Vues/startAdiscussion.php?EntrerDEsValeurVAlide");}