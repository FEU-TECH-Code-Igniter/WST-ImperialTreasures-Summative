</header>
<body>
<section>
<nav class="navbar navbar-expand-lg bg-body-tertiary rounded"  style="background-color: black; color: white;">
<div class="container-fluid" style="background-color: black;">
      <img src="<?php echo IMG.'LOGO.png';?>" alt="" width="64" height="64">
    </a>
    <div class="navbar-collapse collapse" id="navbarsExample09">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= BASEURL?>" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL.'about'?>" style="color: white;">Figurines</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL.'products'?>" style="color: white;">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL.'products'?>" style="color: white;">Table Tops</a>
        </li>
      </ul>
      <form class="d-flex ms-auto" style="margin-right: 100px;">
        <a class="btn btn-outline-success me-2"  href="<?= BASEURL.'register'?>" type="button">Sign In/Register</a>
        <a class="btn btn-sm btn-outline-secondary" type="button" href="<?= BASEURL.'dashboard'?>">My Account</a>
      </form>
    </div>
</div>
</nav>
</section>