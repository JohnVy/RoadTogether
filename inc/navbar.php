<!-- Navbar Header - [ Section 0 ] -->
<!------------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark road_navbar bg-dark road-navbar-light" id="road-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">RoadTrip<br>Together</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#road-nav" aria-controls="road-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>Menu
        </button>

  <div class="collapse navbar-collapse" id="road-nav">
        <ul class="navbar-nav ml-auto">

          <?php
          if( isset($_SESSION['id']) ){
          ?>

          <li class="nav-item active">
              <a href="profil.php" class="nav-link">Mon compte</a>
          </li>

          <li class="nav-item">
              <a href="?logout" class="nav-link">Déconnexion</a>
          </li>

          <?php
          }else{
          ?>

          <li class="nav-item active">
              <a href="home.php" class="nav-link">Devenir membre</a>
          </li>

          <li class="nav-item">
              <a href="blog.php" class="nav-link">Blog</a>
          </li>

          <li class="nav-item">
              <a href="signup.php" class="nav-link">Inscription</a>
          </li>

          <li class="nav-item">
              <a href="signin.php" class="nav-link">Connexion</a>
          </li>
        <?php
        }
        ?>
        </ul>
      </div>
  </div>
</nav>