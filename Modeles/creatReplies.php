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

    function create_discussion($db ,$replier_id, $content, $discussion_id)
    {   
        $qw="insert into replies ( replier_id, content, discussion_id ) VALUES ( '$replier_id', '$content', '$discussion_id') ;";
        if (  $db->query($qw) === false) header("Location: /../Vues/reply.php?ErrorCreateReply");
        return TRUE;
    }
