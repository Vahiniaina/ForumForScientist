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

    function getGroupResult($db,$keyword)
    {
        $result = array();
        $response = $db->prepare("SELECT group_id AS id , group_name AS ids , topic , user.nam AS auth , descriptiones AS content , creation_date AS dat FROM groupe INNER JOIN user ON user.user_id=groupe.creater_id WHERE descriptiones LIKE '%$keyword%' OR topic LIKE '%$keyword%' OR user.nam LIKE '%$keyword%' ");
        $response->execute();
        while ($data = $response->fetch()) {
            $result[] = $data;
        }
        return $result;
    }
    
    function getDiscussionResult($db,$keyword)
    {
        $result = array();
        $response = $db->prepare("SELECT discussion_id AS id ,discussion_id AS ids , topic AS topic , user.nam AS auth , content , post_date AS dat FROM discussion INNER JOIN user ON user.user_id=discussion.starter_id WHERE content LIKE '%$keyword%' OR topic LIKE '%$keyword%' OR user.nam LIKE '%$keyword%' ");
        $response->execute();
        while ($data = $response->fetch()) {
            $result[] = $data;
        }
        return $result;
    }