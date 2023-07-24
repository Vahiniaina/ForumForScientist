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
        $response = $db->prepare("SELECT group_id AS id , creater_id AS auth , descriptiones AS content , creation_date AS dat FROM groupe WHERE topic LIKE '%$keyword%'  OR descriptiones LIKE '%$keyword%' ");
        $response->execute();
        while ($data = $response->fetch()) {
            $result[] = $data;
        }
        return $result;
    }
    
    // function getReplyResult($db,$keyword)
    // {

    //     $result = array();
    //     $response = $db->prepare("SELECT user.nam AS auth  FROM groupe INNER JOIN user ON user.user_id=groupe.creater_id WHERE member.keyword =:id ");
    //     $response->execute(array('id' => $keyword));
    //     while ($data = $response->fetch()) {
    //         $result[] = $data;
    //     }
    //     return $result;
    // }
    
    // function getDiscussionResult($db,$keyword)
    // {

    //     $result = array();
    //     $response = $db->prepare("SELECT member.user_id AS iden , user.nam as nam FROM member INNER JOIN user ON member.user_id=user.user_id WHERE member.keyword =:id ");
    //     $response->execute(array('id' => $keyword));
    //     while ($data = $response->fetch()) {
    //         $result[] = $data;
    //     }
    //     return $result;
    // }