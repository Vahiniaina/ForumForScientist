<?php
    function connectDb()
    {
        $db = mysqli_connect("localhost","root", "", "forum");
        if (!$db) 
        {
            die("Connection failed: " . mysqli_connect_error());
            header("Location: /../Vues/signin.php?ErrorConnectDB");
        } 
        return $db;
    }

    function create_request($db ,$user_id, $messages, $group_id)
    {   
        $qw="insert into memberrequest ( user_id, mes, group_id ) VALUES ( '$user_id', '$messages', '$group_id') ;";
        if (  $db->query($qw) === false) return FALSE;
        return TRUE;
    }
