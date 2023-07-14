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
    function get_list_group($db)
    {

        $result = array();
        $response = $db->query("SELECT *  FROM groupe ORDER BY creation_date DESC LIMIT 0,10  ");
        while ($data = $response->fetch()) {
            $result[] = $data;
        }
        return $result;
    }