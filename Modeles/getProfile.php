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
    function get_Profile($db,$user_id)
    {

        $data = array();
        $response = $db->prepare("SELECT *  FROM user WHERE user_id =:id  ");
        $response->execute(array('id' => $user_id));
        $data = $response->fetch();
        return $data;
    }
