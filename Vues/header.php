<!-- Menu -->
<div class="container" class="flex">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="/web-dev/index.php"><img src="/../forum/assets/images/facebook.png" width="50" height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link active" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/Controllers/groups.php">Groups</a>
        </li>
        <?php 
          if(isset($_SESSION['state']) AND $_SESSION['state']=="connected" )
          {
            echo "<li class=\"nav-item active\"><a class=\"nav-link active\" href=\"/../forum/profile.php?mail=".$_SESSION['mail']."\">Profile</a></li>";
            echo "<li class=\"nav-item active\"><a class=\"nav-link active\" href=\"/../forum/Controllers/logout.php\">Log Out</a></li>";
          }
          else
          {
            echo "<li class=\"nav-item active\"><a class=\"nav-link active\" href=\"/../forum/Controllers/signin.php\">Log In</a></li>";
            echo "<li class=\"nav-item active\"><a class=\"nav-link active\" href=\"/../forum/Controllers/signup.php\">Sign UP</a></li>";
          }
        ?>
      </ul>
    </div>
  </nav>
</div>