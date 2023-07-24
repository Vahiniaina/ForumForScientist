<?php
    
    function getDiscussion($db,$discussion_id)
    {

        $data = array();
        $response = $db->prepare("SELECT * , user.nam AS nam FROM discussion INNER JOIN user ON discussion.starter_id=user.user_id WHERE discussion_id =:id  ");
        $response->execute(array('id' => $discussion_id));
        $data = $response->fetch();
        return $data;
    }