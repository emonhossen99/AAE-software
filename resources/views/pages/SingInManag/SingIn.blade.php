<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
    <?php
    @include('assets/link/Linkcss/cssLink.php')
    ?>
</head>

<body>

<div class="vg-page" id="HeadSingin">

    <div class="container">
      <div class="text-center wow fadeInUp">
      </div>
      <div class="row py-5 singinBox">
        <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
          <div class="vg-maps">
          <div class="badge badge-subhead wow fadeInUp">Sing In</div>
           <img src="../assets/img/singin&singup/singin.jpg"   style="width: 100%; height: 100%;" alt="">
          </div>
        </div>
        <div class="singinfrom col-lg-5">
          <form class="vg-contact-form">
            <div class="form-row">
            <h1 class="singInHedding text-center fw-normal wow fadeInUp">Sing In</h1>
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="email" name="Name" placeholder="Your Email Address">
              </div>
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="password" name="Email" placeholder="Your Password">
              </div>
              <p class="resetPass wow fadeInRight">
              Reset Password ??<a href="#">Reset Password</a>
              </p>
              <div class="singInButton">
              <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Sing In</button>
              </div>
              <p class="newAAE wow fadeInLeft">
              New To AAE it Institute ??<a href="/register">Sing Up</a>
              </p>
              <div class="singInButton">
              <div class="githubButton">
            <a href="">
      <img class="socialLogin" src="../assets/img/singin&singup/github.png">
              Continue To Github
            </a>
          </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

    <?php
    @include('assets/link/linkjs/jsLink.php')
    ?>
</body>

</html>