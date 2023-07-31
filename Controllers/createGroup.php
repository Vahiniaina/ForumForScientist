<?php
    session_start();
    if(isset($_POST['group_name']) and isset($_POST['topic']) )
        {
            $group_name=$_POST['group_name'];
            $topicaddslashes(=$_POST['topic']);
            $user_id=$_POST['user_id'];

            if(isset($_POST['description']))$description=$_POST['description'];
            else $description="";
            if(isset($_POST['visibility']))$visibility=$_POST['visibility'];
            else $visibility="";
            if(isset($_POST['accesibilty']))$accesibilty=$_POST['accesibilty'];
            else $accesibilty="";

            include(dirname(__FILE__).'/../Modeles/createGroup.php');
            $db=connectDb();
            if(create_discussion($db, $group_name, $topic, $description,$visibility,$accesibilty,$user_id)) header("Location: /../Forum../Vues/groups.php?Successs");
            else header("Location: /../Forum../Vues/groups.php?creatError");
            
        }
    else{ header("Location: /../Forum/Vues/groups.php?EntrerDEsValeurVAlide");}