<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="<?php echo BASE_URL . "/assets/images/logo.png"; ?>" class="header_logo" alt="Logo">
    </a>
    <div class="header_right">
      <div class="dropdown d-flex dropdown">
        <i class="bi bi-plus-circle-fill" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
        <div class="dropdown-menu" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="#"><i class="bi bi-person-fill"></i> Add Asset</a>
          <!-- <a class="dropdown-item" href="index.php?logout=1"><i class="bi bi-box-arrow-right"></i> Logout</a> -->
        </div>
      </div>
      <div class="dropdown d-flex dropdown">
        <i class="bi bi-person-circle" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
        <div class="dropdown-menu" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="#"><i class="bi bi-person-fill"></i> Profile</a>
          <a class="dropdown-item" href="index.php?logout=1"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>
      </div>
    </div>

    
  </div>
</nav>
