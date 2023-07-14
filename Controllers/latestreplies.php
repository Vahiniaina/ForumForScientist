<?php
    include(dirname(__FILE__).'/../Modeles/latestreplies.php');
    $db=connectDb();
    $result=array();
    $discussion_id=$_GET['discussion_id'];
    $result=get_latest_replies($db,$discussion_id);