<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="../index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>LernX</title>
</head>

<body class="w-100 position-relative">
  <nav id="navBar_blog" class="navbar_blog d-none d-lg-flex">
    <div class="p-2 container w-100 d-flex align-items-center my-auto justify-content-between">
      <img src="../Assets/lernxLogo.svg" alt="Logo" class="navLogo" />
      <div class="navLinks">
        <a class="" href="../pages/HomePage/HomePage.html">
          <span>programs</span>
        </a>
        <a class="" href="../pages/Assessments/assessments.html">about</a>
        <a class="" href="../pages/audioPlayer/audioPlayer.html">
          contact us
        </a>

      </div>
      <button class="login-btn">Enroll now</button>
    </div>
  </nav>
  <nav class="navbar d-lg-none py-3 position-relative">
    <div class="container">
      <img src="../Assets/lernxLogo.svg" alt="Logo" class="mobileNav_blog" />
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="navbarDrawerLabel">Menu</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="drawer">
        <a href="/">home</a>
        <a href="/pages/assessments.html">assignments</a>
        <a class="dropdown d-flex gap-2" id="trainingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Trainings <img src="/assets/dropdownArrowMobile.svg" alt="" class="dropdownArrow">
        </a>
        <ul class="dropdown-menu mt-3" aria-labelledby="trainingsDropdown">
          <a class="dropdown-item" href="#">Training 1</a>
          <a class="dropdown-item" href="#">Training 2</a>
        </ul>
        <a class="dropdown gap-2" id="coursesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Courses <img src="./Assets/dropdownArrowMobile.svg" alt="" class="dropdownArrow">
        </a>
        <ul class="dropdown-menu mt-3" aria-labelledby="coursesDropdown">
          <li><a class="dropdown-item" href="#">Course 1</a></li>
          <li><a class="dropdown-item" href="#">Course 2</a></li>
        </ul>
        <a href="/pages/notes.html">academics</a>
      </div>
    </div>
  </div>

  <!-- Navbar Section -->

  <!-- Main Section -->
  <main class="w-100">
    <section class="section_1_blog">
      <div class="blog_container container">
        <img src="" alt="image" class="blog_image">
        <h2 class="blog_title">main title</h2>
        <p class="blog_content">Lorem ipsum dolor sit amet consectetur. A placerat libero laoreet risus nulla at pharetra enim integer.
          Amet egestas viverra dui felis maecenas et tortor dignissim auctor.Lorem ipsum dolor sit amet consectetur.
          A placerat libero laoreet risus nulla at pharetra enim integer. Amet egestas viverra dui felis maecenas
          et tortor dignissim auctor.Lorem ipsum dolor sit amet consectetur. A placerat libero laoreet risus nulla
          at pharetra enim integer. Amet egestas viverra dui felis maecenas et tortor dignissim auctor.Lorem ipsum
          dolor sit amet consectetur. A placerat libero laoreet risus nulla at pharetra enim integer. Amet egestas
          viverra dui felis maecenas et tortor dignissim auctor.Lorem ipsum dolor sit amet consectetur. A placerat
          libero laoreet risus nulla at pharetra enim integer. Amet egestas viverra dui felis maecenas et tortor
          dignissim auctor.</p>
        <h2 class="blog_secondary_title">secondary title</h2>
        <h2 class="sub_secondary_title">Sub-Secondary title 1</h2>
        <p class="sub_secondary_content">Lorem ipsum dolor sit amet consectetur. A placerat libero laoreet risus nulla at pharetra enim integer.
          Amet egestas viverra dui felis maecenas et tortor dignissim auctor.Lorem ipsum dolor sit amet consectetur.
          A placerat libero laoreet risus nulla at pharetra enim integer. Amet egestas viverra dui felis maecenas et tortor
          dignissim auctor.Lorem ipsum dolor sit amet consectetur. A placerat libero laoreet risus nulla at pharetra enim
          integer. Amet egestas viverra dui felis maecenas et tortor dignissim auctor.Lorem ipsum dolor sit amet consectetur.
          A placerat libero laoreet risus nulla at pharetra enim integer. Amet egestas viverra dui felis maecenas et tortor
          dignissim auctor.Lorem ipsum dolor sit amet consectetur. A placerat libero laoreet risus nulla at pharetra enim integer.
          Amet egestas viverra dui felis maecenas et tortor dignissim auctor.
          Lorem ipsum dolor sit amet consectetur. A placerat libero laoreet risus nulla at pharetra enim integer.
          Amet egestas viverra dui felis maecenas et tortor dignissim auctor.Lorem ipsum dolor sit amet consectetur.
          A placerat libero laoreet risus nulla at pharetra enim integer. Amet egestas viverra dui felis maecenas
          et tortor dignissim auctor.Lorem ipsum dolor sit amet consectetur. A placerat libero laoreet risus nulla
          at pharetra enim integer. Amet egestas viverra dui felis maecenas et tortor dignissim auctor.Lorem ipsum
          dolor sit amet consectetur. A placerat libero laoreet risus nulla at pharetra enim integer.
          Amet egestas viverra dui felis maecenas et tortor dignissim auctor.Lorem ipsum dolor sit amet
          consectetur. A placerat libero laoreet risus nulla at pharetra enim integer. Amet egestas viverra dui
          felis maecenas et tortor dignissim auctor.
        </p>
        <img src="" alt="secondary_img" class="blog_subImage">
        <p class="sub_secondary_content">Lorem ipsum dolor sit amet consectetur. A placerat libero laoreet risus nulla at pharetra enim integer.
          Amet egestas viverra dui felis maecenas et tortor dignissim auctor.Lorem ipsum dolor sit amet consectetur.
          A placerat libero laoreet risus nulla at pharetra enim integer. Amet egestas viverra dui felis maecenas
          et tortor dignissim auctor.Lorem ipsum dolor sit amet consectetur. A placerat libero laoreet risus nulla
          at pharetra enim integer. Amet egestas viverra dui felis maecenas et tortor dignissim auctor.Lorem ipsum
          dolor sit amet consectetur. A placerat libero laoreet risus nulla at pharetra enim integer. Amet egestas
          viverra dui felis maecenas et tortor dignissim auctor.Lorem ipsum dolor sit amet consectetur. A placerat
          libero laoreet risus nulla at pharetra enim integer. Amet egestas viverra dui felis maecenas et tortor
          dignissim auctor.</p>
      </div>
    </section>
    <section class="section_2_blog">
      <div class="container">
        <h2 class="section_2_blog_heading">more blogs</h2>
        <div class="container position-relative pb-5">
          <div class="testimonial mySwiper my-auto d-flex align-items-center justify-content-center">
            <div class="testimonial swiper-wrapper">

              <div class="slide swiper-slide">
                <div class="d-flex-w-100 slide_container">
                  EXPLORING THE FUTURE OF ED TECH : A DEEP DIVE INTO LERNX'S INNOVATIVE APPROACH
                </div>
              </div>
              <div class="slide swiper-slide">
                <div class="d-flex-w-100 slide_container">
                  EXPLORING THE FUTURE OF ED TECH : A DEEP DIVE INTO LERNX'S INNOVATIVE APPROACH
                </div>
              </div>
              <div class="slide swiper-slide">
                <div class="d-flex-w-100 slide_container">
                  EXPLORING THE FUTURE OF ED TECH : A DEEP DIVE INTO LERNX'S INNOVATIVE APPROACH
                </div>
              </div>
              <div class="slide swiper-slide">
                <div class="d-flex-w-100 slide_container">
                  EXPLORING THE FUTURE OF ED TECH : A DEEP DIVE INTO LERNX'S INNOVATIVE APPROACH
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container w-100 row row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-between">
        <div class="col-lg-5">
          <div class="">
            <img src="../Assets/Logo.svg" alt="" class="footer_logo">
            <p class="footer_summary my-sm-4 my-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Labore quod asperiores illum ullam ipsam, eaque deleniti. Praesentium rem debitis ipsum?</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="">
            <h2 class="list_heading">programs</h2>
            <li class="list">study material</li>
            <li class="list">industrial training program</li>
            <li class="list">IELTS program</li>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="">
            <h2 class="list_heading">company</h2>
            <li class="list">about us</li>
            <li class="list">contact us</li>
            <li class="list">careers</li>
          </div>
        </div>
      </div>
    </footer>
  </main>
  <!-- Main Section -->


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      grabCursor: true,
      initialSlide: 0,
      loop: true,
      pagination: false,
      navigation: false,
      breakpoints: {
        1024: {
          slidesPerView: 3,
          spaceBetween: 60,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
      },
    });
  </script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>