<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12  text-center">
                <ul class="learn"> <h4>Help and support</h4>
                    <li>About us</li>
                    <li>FAQ</li>
                    <li>Help</li>
                    <li>Report a problem</li>
                    <li>Terms of service</li>
                    <li>Setting and privacy</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-12 text-center">
                 <h4>Community</h4>
                 <?php 
                    if(isset($_SESSION['state']) AND $_SESSION['state']=="connected" )
                    {
                        echo "<a class=\"btn btn-outline-primary\" href=\"/../forum/Vues/profile.php?mail=".$_SESSION['mail']."\">Profile</a><br>";
                        echo "<a class=\"btn btn-outline-primary\" href=\"/../forum/Controllers/logout.php\">Log Out</a>";
                    }
                    else
                    {
                        echo "<a class=\"btn btn-outline-primary\" href=\"/../forum/Controllers/signin.php\">Log In</a><br>";
                        echo "<a class=\"btn btn-outline-primary\" href=\"/../forum/Controllers/signup.php\">Sign UP</a>";
                    }
                ?>
            </div>
            <div class="col-lg-3 col-md-6 col-12 text-center">  
                 <h4>Contact us</h4>  
                 <div><i class="fa fa-phone" class="p-2">+261388623981</i></div>
                <ul class="followus" class="list"> <h4>Follow us on</h4>
                    <li>
                         <a href="https://mobile.facebook.com/?_rdc=1&_rdr" title="RANDRIANJATOVO Vahiniaina" target="_blank">
                                <img src="../assets/images/facebook.png" width="30" height="30" alt="Icone facebook">
                         </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" title="RANDRIANJATOVO Vahiniaina" target="_blank">
                            <img src="../assets/images/instagram.png" width="30" height="30" alt="Icone instagram" >
                        </a>
                    </li>
               </ul>
                 
            </div>
            <div class="col-lg-3 col-md-6 col-12  text-center">
                <h4>Search</h4>
                <form class="d-flex" method="post" action="../Controllers/search.php">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                            <input class="btn btn-outline-primary" type="submit" value="Search">
                </form> 
            </div>
        </div>  
        <!-- Retour en haut-->
        <a href="#top" class="Back">Top</a>
        <!-- Copyright-->
        <?php
            echo "<p>&copy; Copyright " . date("Y") . " R.Vahiniaina</p>";
        ?>
    </div>
</footer>