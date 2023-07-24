<?php
    function connectDb()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=forum', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        return $db;
    }
    function addLikes($db,$discussion_id, $user_id  )
    {
        try {
            $response = $db->prepare("  INSERT INTO `likes` (`like_id`, `discussion_id`, `user_id`) VALUES (NULL, '$discussion_id', '$user_id')");
            $response->execute();
        }catch (Exception $e) {}
    }
    