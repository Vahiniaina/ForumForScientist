<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12  text-center">
                <ul class="learn"> <h4>A savoir:</h4>
                    <li>A propos</li>
                    <li>FAQ</li>
                    <li>Aide</li>
                    <li>Signaler un problem</li>
                    <li>Conditions et reglements </li>
                    <li>Parametre et confidentialité</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-12 text-center">
                 <h4>Communauté:</h4>
                 <a class="btn btn-outline-primary" href="/Sciences/Vues/signup.php">Souscrire</a>
            </div>
            <div class="col-lg-3 col-md-6 col-12 text-center">  
                 <h4>Nous joindre:</h4>  
                 <div><i class="fa fa-phone" class="p-2">+261325045819</i></div>
                <ul class="followus" class="list"> <h4>Suivez nous:</h4>
                    <li>
                         <a href="https://mobile.facebook.com/?_rdc=1&_rdr" title="RANDRIANJATOVO Vahiniaina" target="_blank">
                                <img src="assets/images/facebook.png" width="30" height="30" alt="Icone facebook">
                         </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" title="RANDRIANJATOVO Vahiniaina" target="_blank">
                            <img src="assets/images/instagram.png" width="30" height="30" alt="Icone instagram" >
                        </a>
                    </li>
               </ul>
                 
            </div>
            <div class="col-lg-3 col-md-6 col-12  text-center">
                <h4>Récherche</h4>
                <form class="d-flex" method="post" action="/web-dev/Controllers/search.php">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                            <input class="btn btn-outline-primary" type="submit" value="Recherche">
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