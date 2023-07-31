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

    function create_discussion($db ,$group_name, $topic, $description,$accesibilty,$user_id)
    {   
        
        if(!$db->exec("INSERT INTO groupe ( group_name, topic, descriptiones,  accesibilty, creater_id ) VALUES ( '$group_name', '$topic', '$description', '$accesibilty','$user_id')   ")) return FALSE;
        return TRUE;
    }
