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
    function connectBDD()
    {
        $db = mysqli_connect("localhost","root", "", "forum");
        if (!$db) 
        {
            die("Connection failed: " . mysqli_connect_error());
            header("Location: /../Vues/signin.php?ErrorConnectDB");
        } 
        return $db;
    }
    function get_user_info($db,$user_id)
    {
        $data = array();
        $response = $db->prepare("SELECT *  FROM user WHERE 'user_id =':id ' ");
        $response->execute(array('id' => $user_id));
        $data = $response->fetch();
        return $data;
    }
    function delete_user($db,$user_id)
    {
        $response = $db->prepare("DELETE user WHERE user_id =':id '  ");
        $response->execute(array( 'id' => $user_id));
        if($response) return TRUE;
        else return FALSE;
    }