<?php
    session_start();
    include(dirname(__FILE__).'/../Modeles/deleteGroup.php');
    $db=connectBDD();
    $password=$_POST['password'];
    $user_id=$_POST['user_id'];
    $group_id=$_POST['group_id'];
    $qw="select * from user where user_id='$user_id';";
    $exe=mysqli_query($db,$qw);
    $result=mysqli_fetch_assoc($exe);
    if ($result) {
        $hash=$result['passwor'];
        if(password_verify($password, $hash))
        {
            if(isset($_POST['name']))
            {  
                $nam=$_POST['name'];
                $qw1="update groupe set group_name='$nam' where user_id='$group_id';";
                $exe1=mysqli_query($db,$qw1);
            }
            if(isset($_POST['description']))
            {  
                $des=$_POST['description'];
                $qw2="update groupe set descriptiones='$des' where group_id='$group_id';";
                $exe2=mysqli_query($db,$qw2);
            }
            if(isset($_POST['topic']))
            {  
                $top=$_POST['topic'];
                $qw3="update groupe set topic='$top' where group_id='$group_id';";
                $exe3=mysqli_query($db,$qw3);
            }
            if(isset($_POST['visibility']))
            { 
                $vis=$_POST['visibility'];
                $qw4="update groupe set visibility='$vis' where group_id='$group_id';";
                $exe4=mysqli_query($db,$qw4);
            }
            if(isset($_POST['accesibilty']))
            { 
                $acc=$_POST['accesibilty'];
                $qw5="update groupe set accesibilty='$acc' where group_id='$group_id';";
                $exe5=mysqli_query($db,$qw5);
            }
            header("Location: /../Forum/Vues/admin.php?user_id=".$user_id."&group_id=".$group_id."&e=UpdateSuccesfully");
        } 
        else header("Location: /../Forum/Vues/changeGroup.php?user_id=".$user_id."&group_id=".$group_id."&e=WrongPassword");
    }
    else 
    {
        header("Location: /../Forum/Vues/changeGroup.php?user_id=".$user_id."&group_id=".$group_id);
    }




    