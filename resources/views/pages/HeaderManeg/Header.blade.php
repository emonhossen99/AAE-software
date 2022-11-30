<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>AAE Software & IT Solution</title>
  <?php
  @include('assets/link/Linkcss/cssLink.php')
  ?>
</head>

<body class="theme-red">

  <!-- Back to top button -->
   <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>

  <div class="vg-page page-home" id="home">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">Personal-Folio</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="/" class="fanciNav nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="/about" class="fanciNav nav-link" data-animate="scrolling">About</a>
            </li>
            <li class="nav-item">
              <a href="/services" class="fanciNav nav-link" data-animate="scrolling">Services</a>
            </li>
            <li class="nav-item">
              <a href="/gallery" class="fanciNav nav-link" data-animate="scrolling">Gallery</a>
            </li>
            <li class="nav-item">
              <a href="/contact" class="fanciNav nav-link" data-animate="scrolling">Contact</a>
            </li>
            <li class="nav-item">
              <a href="/dashborad" class="fanciNav nav-link" data-animate="scrolling">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="/singin" class="fanciNav nav-link" data-animate="scrolling">Sing In</a>
            </li>
          </ul>
        </div>
      </div>
    </div>  
    


    <?php
    @include('assets/link/linkjs/jsLink.php')
    ?>



</body>

</html>