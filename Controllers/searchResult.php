<?php
    include(dirname(__FILE__).'/../Modeles/searchResult.php');
    $db=connectDb();
    $result=array();
    $result=getGroupResult($db,$_POST['keyword']);
    if (!$result) 
    {
        header("Location: /../forum/Vues/home.php?ErreurGetResult");
    }