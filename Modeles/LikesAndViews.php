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

    function getLikes($db,$discussion_id)
    {
        $response = $db->prepare("SELECT COUNT(*) AS totalLikes FROM likes WHERE discussion_id =:id  ");
        $response->execute(array('id' => $discussion_id ));
        $data = $response->fetch();
        return $data['totalLikes'];
    }
    
    function getViews($db,$discussion_id)
    {
        $response = $db->prepare("SELECT COUNT(*) AS totalViews FROM views WHERE discussion_id =:id ");
        $response->execute(array('id' => $discussion_id ));
        $data = $response->fetch();
        return $data['totalViews'];
    }

    
    function addViews($db,$discussion_id, $user_id  )
    {
        try {
            $response = $db->prepare("INSERT INTO `views` (`views_id`, `discussion_id`, `viewer_id`, `view_date`) VALUES (NULL, '$discussion_id ', '$user_id', CURRENT_TIMESTAMP)");
            $response->execute();
        }catch (Exception $e) {}
    }