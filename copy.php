<?php
    function connectDb()
    {
        $db = mysqli_connect("localhost","root", "", "forum");
        return $db;
    }

    function create_user($db,$name, $mail, $password)
    {   
        $qw="insert into user ( name, mail, password ) VALUES ( '$name', '$mail', '$password') ;";
        if (  $db->query($qw) === false) header("Location: /../Vues/signup?ErrorCreateUser");
    }

    function get_user($db,$mail)
    {
        $qw="Select * from usert where mail=$mail;";
        $exe=mysqli_query($db,$qw);
        if($exe)
        {
                if(mysqli_num_rows($exe) == 1)
                {
                    while($result=mysqli_fetch_assoc($exe))
                    {
                        $user[]=$result;
                    }
                    return $user;
                }
                else header("Location: /../Vues/signup?ErrorGetUserManyMail");
        }
        else header("Location: /../Vues/signup?ErrorGetUser");
    }
    
   