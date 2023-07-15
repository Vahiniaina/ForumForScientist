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
    function update_mail($db,$mail,$user_id)
    {

        $response = $db->prepare("UPDATE  user SET mail=:ma WHERE user_id =:ids  ");
        $response->execute(array('ma' => $mail , 'ids' => $user_id));
        if(!$response) header("Location: ../Vues/changeProfile.php");
        return TRUE;
    }
    // function update_name($db,$name$user_id)
    // {

    //     $response = $db->prepare("UPDATE  user SET nam=':m' WHERE user_id =:id  ");
    //     $response->execute(array('m' => $name, 'id' => $user_id));
    //     if(!$response) header("Location: ../Vues/changeProfile.php");
    //     return TRUE;
    // }
    function update_password($db,$password,$user_id)
    {

        $response = $db->prepare("UPDATE  user SET password=:mi WHERE user_id =:id  ");
        $response->execute(array('mi' => $password, 'id' => $user_id));
        if(!$response) header("Location: ../Vues/changeProfile.php");
        return TRUE;
    }
