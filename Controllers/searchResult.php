<?php
    include(dirname(__FILE__).'/../Modeles/searchResult.php');
    $db=connectDb();
    $result=array();
    $keyword=$_POST['keyword'];
    if($_POST['categories']=='group')
    {
        $result=getGroupResult($db,$keyword);
        $col='Creator';
        $col1='Group name';
        $col2='Creation';
    }
    if($_POST['categories']=='discussion')
    {
        $result=getDiscussionResult($db,$keyword);
        $col='Author';
        $col1='ID';
        $col2='Posting';
    }
    $type=$_POST['categories'];
    
    