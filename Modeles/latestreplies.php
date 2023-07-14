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
    function get_latest_replies($db,$discussion_id)
    {

        $result = array();
        $response = $db->prepare('SELECT * FROM replies WHERE discussion_id =:id ORDER BY replies_date DESC LIMIT 0,10 ');
        $response->execute(array('id' => $discussion_id));
        while ($data = $response->fetch()) {
            $result[] = $data;
        }
        return $result;
    }
