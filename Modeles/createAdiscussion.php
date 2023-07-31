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

    function create_discussion($db ,$topic, $content, $user_id)
    {   
        $qw="insert into discussion ( topic, content, starter_id ) VALUES ( '$topic', '$content', '$user_id') ;";
        if (  $db->query($qw) === false) header("Location: /../Vues/startAdiscussion.php?ErrorCreateDiscussion");
        return TRUE;
    }