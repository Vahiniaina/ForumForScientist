<?php
    include(dirname(__FILE__).'/../Modeles/groupList.php');
    $db=connectDb();
    $result=array();
    $result=get_list_group($db);