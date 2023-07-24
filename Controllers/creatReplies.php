<?php
    session_start();
    if(isset($_POST['replier_id']) and isset($_POST['content']) and isset($_POST['discussion_id']))
        {
            $replier_id=$_POST['replier_id'];
            $content=$_POST['content'];
            $discussion_id=$_POST['discussion_id'];
            include(dirname(__FILE__).'/../Modeles/creatReplies.php');
            if(isset($_SESSION['user_id'])) $replier_id=$_SESSION['user_id'];
            $db=connectDb();
            if(create_replies($db, $replier_id, $content, $discussion_id)) header("Location: /../Forum/Vues/discussion.php?discussion_id=".$_POST['discussion_id']);
            else header("Location: /../Forum/Vues/relpy.php?creatError");
            
        }
    else{ header("Location: /../Forum/Vues/relpy.php?EntrerDEsValeurVAlide");}