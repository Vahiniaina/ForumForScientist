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
    function get_Group($db,$group_id)
    {

        $data = array();
        $response = $db->prepare("SELECT *  FROM groupe WHERE group_id =:id  ");
        $response->execute(array('id' => $group_id));
        $data = $response->fetch();
        return $data;
    }
