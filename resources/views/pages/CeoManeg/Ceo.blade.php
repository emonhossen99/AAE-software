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
    <div class="vg-page page-about" id="about">
    <div class="container py-5">
    <div class="badge badge-subhead text-center fw-normal wow fadeInUp">About</div>
      <div class="ceoContent row">
        <div class="col-lg-4 py-3">
          <div class="ceoImagess img-place wow fadeInUp">
            <img src="assets/img/person/person.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight">
          <h1 class="fw-light">Md Emon Hossen</h1>
          <h5>Hello, I am <span class="fg-theme mb-3 typedContent"></span></h5>
          <p class="text-muted">Assalamu Alaikum wa Rahmatullahi wa Barakatuh, I am Mohammad Emon Hossain. Born 02/01/2001 My Home is a small village at Brahmapur Purpur Para in Naldanga Upazila of Natore District, . When I was young, I wanted to become a doctor, but when I was growing up, I heard a lot about software engineers. I am trying to become a software engineer, I don't know how much Allah will give me, but what I have got, Alhamdulillah, I don't know how far I have come, but I want to go to the heights of success, thank you.</p>
          <ul class="theme-list">
            <li><b>From:</b> Natore,Rajshahi</li>
            <li><b>Lives In:</b> Mirpur 10,Dhaka</li>
            <li><b>Age:</b> 21</li>
            <li><b>Gender:</b> Male</li>
          </ul>
        </div>
      </div>
    </div>


    <?php
    @include('assets/link/linkjs/jsLink.php')
    ?>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed(".typedContent",{
    strings: [
    "Student",
    "Web Designer",
    "Web Developer",
    "Ceo Of AAE It",
] ,
    typeSpeed: 60,
    backSpeed: 60,
    loop: true
    })
</script>


</body>

</html>