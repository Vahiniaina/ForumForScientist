<?php
    $mysqli = new mysqli("localhost","root","","forum");
    function create_user($mysqli,$name, $mail, $password)
    {   $qwr="INSERT INTO user  VALUES (NULL, $name, $mail, $password));}";
        //$db->query($qwr);  
        $mysqli -> query($qwr);
    }
    function get_user($mysqli,$mail)
    {
        $qwr="SELECT * FROM user WHERE mail=$mail;";
        
        if ($result = $mysqli -> query($qwr)) {
            while($rp=$result->fetch())
            {
                $user[]=$rp;
            }
            $result -> close();
          }
          $rp = $mysqli->query($qwr);
       
        return $user;
    }
    
   