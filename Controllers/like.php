<?php
    include(dirname(__FILE__).'/../Modeles/like.php');
    $db=connectDb();
    if(isset($_GET['user_id']) AND isset($_GET['discussion_id']) AND $_GET['user_id']!=NULL) 
    {
        addLikes($db,$_GET['discussion_id'],$_GET['user_id']);
        header("Location: /../Forum/Vues/discussion.php?discussion_id=".$_GET['discussion_id']."&user_id=".$_GET['user_id']);
    }
    else header("Location: /../Forum/Vues/signin.php?e=SignInToLikeADiscussion");