<?php
    function get_requestList($db,$group_id)
    {

        $result = array();
        $response = $db->prepare("SELECT user.user_id AS iden , user.nam as nam  , mes FROM memberrequest JOIN user ON memberrequest.user_id=user.user_id WHERE memberrequest.group_id =:id AND request_state='Unviewed'  ");
        $response->execute(array('id' => $group_id));
        while ($data = $response->fetch()) {
            $result[] = $data;
        }
        return $result;
    }