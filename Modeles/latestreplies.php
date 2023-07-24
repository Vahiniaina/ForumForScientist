<?php
    
    function get_latest_replies($db,$discussion_id)
    {

        $result = array();
        $response = $db->prepare('SELECT * , user.nam AS nam FROM replies INNER JOIN user ON replies.replier_id=user.user_id WHERE discussion_id =:id ORDER BY replies_date DESC LIMIT 0,10 ');
        $response->execute(array('id' => $discussion_id));
        while ($data = $response->fetch()) {
            $result[] = $data;
        }
        return $result;
    }
