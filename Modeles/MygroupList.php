<?php
    
    function get_My_list_group($db,$user_id)
    {

        $result = array();
        $response = $db->prepare("SELECT *  FROM groupe WHERE creater_id =:id ORDER BY creation_date DESC LIMIT 0,10  ");
        $response->execute(array('id' => $user_id));
        while ($data = $response->fetch()) {
            $result[] = $data;
        }
        return $result;
    }