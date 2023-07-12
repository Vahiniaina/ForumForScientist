<?php
    session_start();
    $_SESSION['state']="loggedout";
    header("Location: /../Forum../Vues/home.php?LoggedOut");