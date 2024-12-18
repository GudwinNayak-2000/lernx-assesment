<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="./index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>LernX</title>
</head>

<body class="w-100 position-relative">
  <!-- Navbar Section -->

  <div class="w-100 nav-homepage-container">
    <nav class="navbar-homepage container d-none d-lg-flex">
      <div class="navLinks-digital-marketing">
        <img src="./Assets/lernxLogo.svg" alt="Logo" class="navLogo me-4" />
        <a class="" href="./index.php">home</a>
        <a class="" href="./pages/assessments.php">assessments</a>
        <a class="dropdown gap-1" href="./pages/training.php" id="trainingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Trainings
          </a>
          <ul class="dropdown-menu assessment-dropdown mt-3" aria-labelledby="trainingsDropdown">
         <a class="dropdown-item" href="./pages/hrm.php">HRM</a>
          <a class="dropdown-item" href="./pages/digital-marketing.php">Digital Marketing</a>
          <a class="dropdown-item" href="./pages/mern-stack-training.php">MERN Stack</a>
        </ul>
        <a class="dropdown gap-1" href="./pages/courses.php" id="coursesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Courses
        </a>
        <a class="" href="./pages/notes.php">academics</a>
      </div>
      <div class="navButtons">
        <button class="login-btn-homepage">Login</button>
        <button class="signup-btn">Signup</button>
      </div>
    </nav>
    <nav class="navbar d-lg-none py-3 bg-white position-relative">
    <div class="mobileNavContainer-index">
      <img src="./Assets/lernxLogo.svg" alt="Logo" class="mobileNav" />
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  </div>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="navbarDrawerLabel">Menu</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="drawer">
        <a href="./index.php">home</a>
        <a href="./pages/assessments.php">assignments</a>
        <a class="dropdown d-flex gap-2" id="trainingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Trainings
        </a>
        <a class="dropdown gap-2" id="coursesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Courses
        </a>
        <a href="./pages/notes.php">academics</a>
      </div>
    </div>
  </div>
  <!-- Navbar Section -->

  <!-- Main Section -->
  <main class="w-100">
    <div class="bg-shape1">
      <img src="./Assets/bg-shape1.svg" alt="">
    </div>
    <div class="bg-shape2">
      <img src="./Assets/bg-shape2.svg" alt="" class="">
    </div>
    <section class="section_1">
      <div class="section_1_container">
        <div class="d-flex container flex-column row-gap-1 justify-content-center align-items-center">
          <h2 class="section_1_homepage_heading">
            Unlocking Knowledge
          </h2>
          <h2 class="section_1_homepage_subheading">Revolutionizing Learning</h2>
          <p class="section_1_homepage_description">Lorem ipsum dolor sit amet consectetur. Fermentum vel quisque viverra fermentum
            turpis vitae tristique.</p>
          <div class="container my-5 d-flex align-items-center justify-content-center">
            <div class="batch_button1 row row-cols-lg-5">
              <div class="batch_button_content1">
                <span class="button_content_span11">
                  47k+
                </span>
                <span class="button_content_span21">
                  linkedin followers
                </span>
              </div>
              <div class="batch_button_content1">
                <span class="button_content_span11">
                  100k+
                </span>
                <span class="button_content_span21">
                  successful learners
                </span>
              </div>
              <div class="batch_button_content1">
                <span class="button_content_span11">
                  30+
                </span>
                <span class="button_content_span21">
                  valuable programs
                </span>
              </div>
              <div class="batch_button_content1">
                <span class="button_content_span11">
                  89%
                </span>
                <span class="button_content_span21">
                  average salary hike
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section_2_homepage">
      <div class="section_2_homepage_container container mx-auto">
        <h2 class="section_2_homepage_heading">Join us and experience the</h2>
        <h2 class="section_2_homepage_subheading">numerous advantages</h2>
        <div class="row row-cols-lg-2 container gap-5 py-5 section_2_advantage_container">
          <div class="col-lg-4 d-flex m-0 p-0 left_character_container">
            <img src="./Assets/Character.svg" alt="" class="section_2_image">
          </div>
          <div class="col-lg-7 right_cards">
            <div class="d-flex flex-column">
              <div class="section_2_card my-lg-2 mx-md-4 my-2 mx-lg-5 d-flex gap-sm-1">
                <img src="./Assets/charm_notes-tick.svg" alt="" class="section_2_card_note">
                <div class="section_2_right_card_content">
                  <h3 class="section_2_card_heading">All syllabus covering notes</h3>
                  <p class="section_2_card_description">Find solutions for textbook problems in math, science, business
                    and more.</p>
                </div>
              </div>
              <div class="section_2_card my-lg-2 my-2 d-flex gap-sm-1">
                <img src="./Assets/charm_notes-tick.svg" alt="" class="section_2_card_note">
                <div class="section_2_right_card_content">
                  <h3 class="section_2_card_heading">Step-by-step learning</h3>
                  <p class="section_2_card_description">Don't just get it, learn it! Reveal one step at a time to lock in understanding,
                    and sample free solutions from every textbook.</p>
                </div>
              </div>
              <div class="section_2_card my-lg-2 my-2 mx-md-4 mx-lg-5 d-flex gap-sm-1">
                <img src="./Assets/charm_notes-tick.svg" alt="" class="section_2_card_note">
                <div class="section_2_right_card_content">
                  <h3 class="section_2_card_heading">Exam prep & practice</h3>
                  <p class="section_2_card_description">Figure out what you don't know & get ready for test day with practice exams.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section_3_homepage">
      <div class="section_3_homepage_container container">
        <h2 class="section_3_homepage_heading">Discover Leading <span class="section_3_homepage_span">Lernx</span>
          Solutions to Excel in Your <span class="section_3_homepage_span">Professional Journey</span>.</h2>
        <div class="container discover_container_homepage">
          <div class="mySwiper overflow-hidden">
            <div class="courses-container">

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section_4">
      <div class="container d-flex justify-content-center">
        <div class="row row-cols-lg-2 assessment_pass_container container">
          <div class="assessment_left_container col-lg-8">
            <div class="d-flex flex-wrap flex-column">
              <img src="./Assets/lernxLogo.svg" alt="" class="lernx_logo">
              <h2 class="assessment_heading mx-1">Learning<span class="assessment_span mx-1">Pass</span>
            </div>
            </h2>
            <span class="assessment_access_span my-2">Get access to</span>
            <div class="d-flex row row-cols-lg-3 row-cols-sm-1 p-0 assessment_cards">
              <div class="d-flex align-items-center gap-2">
                <img src="./Assets/mockTest.svg" alt="">
                <span class="assessment_plan">300+ Mock test</span>
              </div>
              <div class="d-flex align-items-center gap-2">
                <img src="./Assets/Exam.svg" alt="">
                <span class="assessment_plan">Get access to 20+ courses</span>
              </div>
              <div class="d-flex align-items-center gap-2">
                <img src="./Assets/Money.svg" alt="">
                <span class="assessment_plan">One time payment for life</span>
              </div>
            </div>

          </div>
          <div class="assessment_right_container col-lg-4 mx-auto d-flex justify-content-center">
            <img src="./images/assessments.jpg" alt="" class="test_image mx-auto">
          </div>
        </div>
      </div>
    </section>
    <section class="section_4_homepage">
      <div class="w-100 h-100 section_4_homepage_container d-flex justify-content-center align-items-center mx-auto">
        <div class="row  section_4_homepage_subcontainer">
          <div class="col-lg-6 col-sm-12 p-4">
            <div class="section_4_homepage_heading">Download the <span class="heading_span_inline">lernx academics</span> app now
            </div>
            <hr class="section_4_homepage_hr">
            <div class="section_4_homepage_feature_cols">
              <div class="d-flex align-items-lg-center gap-2 my-2">
                <img src="./Assets/CheckIcon.svg" alt="" class="check-icons">
                <span class="section_4_feature_text">Get access of upto 10,000+ Notes</span>
              </div>
              <div class="d-flex align-items-lg-center gap-2 my-2">
                <img src="./Assets/CheckIcon.svg" alt="" class="check-icons">
                <span class="section_4_feature_text">Get access of upto 10,000+ Notes</span>
              </div>
              <div class="section_4_homepage_button my-lg-5 my-3">
                <img src="./Assets/Playstore.svg" alt="" class="section_4_playstore_image">
                <div class="d-flex flex-column mx-2 button_container">
                  <span class="playstore_text">available on</span>
                  <span class="playstore_subtext">play store</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 position-relative d-lg-flex d-none align-items-center justify-content-center">
            <img src="./Assets/Phone.svg" alt="" class="section_4_image">
          </div>
          <img src="./Assets/Phone.svg" alt="" class="section_4_mobile-image d-flex d-lg-none mx-auto">

        </div>
      </div>
    </section>
    <section class="section_5_homepage">
      <div class="section_5_homepage_container container">
        <span class="section_5_homepage_heading">read blogs</span>
        <span class="section_5_homepage_subheading">Want to Know More About <span class="section_5_homepage_span">Lernx?</span></span>
        <div class="mySwiper overflow-hidden p-2">
          <div id="blog-card-container" class="blog-card-container"></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <section class="section_6_support_container">
      <div class="row row-cols-lg-2 row-cols-sm-1 w-100 gap-4 help_support_container container">
        <div class="col-lg-8 help_support_left_container">
          <h2 class="help_support_heading">Have any further questions?</h2>
          <button class="help_support_btn">contact support</button>
        </div>
        <div class="col-lg-3 help_support_right_container">
          <img src="./Assets/Help&Support.svg" alt="" class="help_image mx-auto container">
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container w-100 row row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-between">
        <div class="col-lg-5">
          <div class="">
            <img src="./Assets/Logo.svg" alt="" class="footer_logo">
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

  <script src="./script/homepage.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      grabCursor: true,
      loop: false,
      initialSlide: 0,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".nav-btn2",
        prevEl: ".nav-btn1",
      },
      breakpoints: {
        1440: {
          slidesPerView: 3,
          spaceBetween: 60,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 60,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        480: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
      },
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>