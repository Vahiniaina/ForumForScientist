<?php
    include(dirname(__FILE__).'/../Modeles/getGroup.php');
    $db=connectDb();
    $result=array();
    $group_id=$_GET['group_id'];
    $result=get_Group($db,$group_id);