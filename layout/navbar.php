<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="#">HOME</a>
          </li>
            <?php if(checkLogin()): ?>
            <li class="nav-item mx-md-2">
            <a class="nav-link" href="manajemen-pengalaman.php">Experience</a>
            </li>
            <li class="nav-item mx-md-2">
            <a class="nav-link" href="manajemen-bukutamu.php">Bukutamu</a>
            </li>
            <li class="nav-item mx-md-2">
            <a class="nav-link" href="manajemen-users.php">User</a>
            </li>
            <li class="nav-item mx-md-2">
            <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <?php endif; ?>
        </ul>
        <img src="assets/img/moon.png" id="icon">
      </div>
    </div>
  </nav>