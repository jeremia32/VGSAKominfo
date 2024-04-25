<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="image/logo.png" alt="Logo" width="80" height="50" class="d-inline-block align-text-top">
      
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visi.php">visi dan misi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk.php">produk kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profill.php">profil kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontak.php">kontak kami</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            about us 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="artikel.php">artikel</a></li>
            <li><a class="dropdown-item" href="event.php">event</a></li>
            <li><a class="dropdown-item" href="klient.php"> klien kami</a></li>
            <li><a class="dropdown-item" href="galeri.php"> galeri foto</a></li>
          </ul>
        </li>
      </ul>
      <a class="btn btn-primary btn-sm" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" style="margin-left: auto;"><i class='fas fa-user'></i></a>
    </div>
  </div>

</nav>
<!-- end navbar -->
<div class="offcanvas offcanvas-start bg-dark text-white" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Authentication</h5>
    <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-unstyled">
      <hr class="bg-white">
      <li><a href="login.php" class="text-decoration-none text-white"><i class="fas fa-user-circle me-2"></i> Sign In</a></li>
      <li><a href="register.php" class="text-decoration-none text-white"><i class="fas fa-user-plus me-2"></i> Sign Up</a></li>
    </ul>
  </div>
</div>