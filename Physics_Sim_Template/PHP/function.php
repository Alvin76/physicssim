
<?php
  public function navbar($value='')
  {
    echo '
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-white" href="home.php">PhysicsSim</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">HOME </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="features.php">FEATURES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gettingStarted.php">GET STARTED</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="help.php">HELP</a>
            </li>

          </ul>
        </div>
      </nav>
    </section> '>
  }

?>
