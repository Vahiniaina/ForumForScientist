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
    function get_My_list_group($db,$id)
    {

        $result = array();
        $response = $db->prepare("SELECT *  FROM groupe WHERE creator_id=:id ORDER BY creation_date DESC LIMIT 0,10  ");
        $response='';
        while ($data = $response->fetch()) {
            $result[] = $data;
        }
        return $result;
    }