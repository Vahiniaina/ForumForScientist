<<?php
    include(dirname(__FILE__).'/../Modeles/memberListAdmin.php');
    $db=connectDb();
    $group_id=$_GET['group_id'];
    $result=array();
    $result=get_memberList($db,$group_id);