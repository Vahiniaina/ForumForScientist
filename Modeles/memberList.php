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
    function get_memberList($db,$group_id)
    {

        $result = array();
        $response = $db->prepare("SELECT member.user_id AS iden , user.nam as nam FROM member INNER JOIN user ON member.user_id=user.user_id WHERE member.group_id =:id ");
        $response->execute(array('id' => $group_id));
        while ($data = $response->fetch()) {
            $result[] = $data;
        }
        return $result;
    }