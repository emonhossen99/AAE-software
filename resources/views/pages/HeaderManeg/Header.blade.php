<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>AAE Software & IT Institute</title>


  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <?php
  @include('assets/link/Linkcss/cssLink.php')
  ?>
</head>

<body class="theme-red">

  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  <!-- Topbar Start -->
  <div class="container-fluid py-2 border-bottom d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-md-5  text-lg-start mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center">
            <a class="text-decoration-none text-body pe-3" href=""><i class="phoneBox bi bi-telephone me-2"></i>+880 01909 758928</a>
            <span class="sosaldevaider text-body">|</span>
            <a class="text-decoration-none text-body px-3" href=""><i class="gmailBox bi bi-envelope me-2"></i>info@aaesoftware.com</a>
          </div>
        </div>
        <div class="sosalIcons col-md-6 text-md-end  text-lg-end">
          <div class=" d-inline-flex align-items-center">
            <a class="sosalfb text-body px-2" href="">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="sosalin text-body px-2" href="">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="sosaltw text-body px-2" href="">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="sosalyt text-body ps-2" href="">
              <i class="fab fa-youtube"></i>
            </a>
            <a class="sosallk text-body px-2" href="">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="vg-page page-home" id="home">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">Personal-Folio</a>
        <button id="miniMenu" class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
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
            <li class="servicesBox nav-item">
            <!-- /services -->
              <a href="" class="fanciNav nav-link" data-animate="scrolling">Services</a>
                <ul class="serviceSubMenu">
                <div class="servicesCounter wow fadeInUp row section-counter">
                    <div class="container">
                      <div class="wow fadeInUp row section-counter mt-5">
                        @foreach($servicesAsome as $service)
                        <div class="conteinerCenter col-md-6 col-lg-3">
                          <div class='developmentBox'>
                            <h5>{{$service[0]->category->cat_name}}</h5>
                            @foreach($service as $data)
                            <a href="{{url('#')}}"><span class="ti-angle-right icons"></span>{{$data->sub_cat_name}}</a>
                            @endforeach
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
              </ul> 
            </li>
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

<script src="{{asset('admin_assets/js/subCatDetails.js')}}"></script>

</body>

</html>