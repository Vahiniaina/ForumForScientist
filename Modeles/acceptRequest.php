<?php
    function connectDb()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=forum', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        return $db;
    }

    function add_member($db ,$group_id,$user_id)
    {   
        
        if(!$db->exec("INSERT INTO member ( group_id, user_id ) VALUES ( '$group_id','$user_id')   ")) return FALSE;
        return TRUE;
    }

    function accept_request($db ,$group_id,$user_id)
    {   
        
        if(!$db->exec("UPDATE  memberrequest SET request_state='Accepted' WHERE group_id=$group_id AND user_id=$user_id ")) return FALSE;
        return TRUE;
    }
