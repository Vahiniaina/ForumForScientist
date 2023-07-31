    <?php
    function connectDb()
    {
        $db = mysqli_connect("localhost","root", "", "forum");
        if (!$db) 
        {
            die("Connection failed: " . mysqli_connect_error());
            header("Location: /../Vues/signin.php?ErrorConnectDB");
        } 
        return $db;
    }
    function get_latest_discussion($db)
    {
        $qw="select *, user.nam as nam from discussion inner join user on discussion.starter_id=user_id order by post_date desc limit 0,10 ;";
        $exe=mysqli_query($db,$qw);
        if($exe)
        {    
            while($results=mysqli_fetch_assoc($exe))
            {
                $result[]=$results;
            }
            return $result;
        }
        else header("Location: /../Vues/home.php?ErrorGetDscussionr");
    }

    
