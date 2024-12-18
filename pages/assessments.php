<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../index.css">
  <title>LernX | Assessments</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar-digital-marketing nav-assessment d-lg-flex d-none">
    <div class="p-2 w-100 d-flex mx-auto nav-assessment-container">
      <div class="navContainer-marketing">
        <img src="../Assets/Logo.svg" alt="Logo" class="navLogo" />
        <div class="navLinks">
          <a class="" href="../index.php">home</a>
          <a class="" href="./pages/assessments.php">assessments</a>
          <a class="dropdown gap-1" href="./training.php" id="trainingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Trainings
          </a>
          <a class="dropdown gap-1" href="./courses.php" id="coursesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Courses <img src="../Assets/DropdownArrow.svg" alt="" class="dropdownArrow">
          </a>
          <a class="" href="./pages/audiobooks.html">academics</a>

        </div>
      </div>
      <a href="../pages/HomePage.html">
        <button class="login-btn-index">Login</button>
      </a>
    </div>
  </nav>
  <nav class="navbar d-lg-none py-3 position-relative">
    <div class="mobileNavContainer-index">
      <img src="./Assets/Logo.svg" alt="Logo" class="mobileNav" />
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
        <a href="./pages/assessments.html">assignments</a>
        <a class="dropdown d-flex gap-2" id="trainingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Trainings <img src="./Assets/dropdownArrowMobile.svg" alt="" class="dropdownArrow">
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
        <a href="./pages/notes.html">academics</a>
      </div>
    </div>
  </div>
  <main class="w-100">
    <section class="section_1_assessments">
      <div class="container row w-full h-full">
        <div class="col-lg-6 hero_section_left">
          <div class="">
            <div class="section_1_assessments_heading">One Assessment Pass <span class="section_1_assessments_span">For all your</span><span class="d-flex flex-wrap section_1_assessments_span2">Examinations need</span></div>
            <p class="section_1_assessments_subheading">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
            <button class="access_btn">Get access</button>
          </div>
        </div>
        <div class="col-lg-6 hero_section_right">
          <img src="../Assets/hero.svg" alt="" class="assessment_illustration">
        </div>
      </div>
    </section>
    <section class="section_2_assessments">
      <div class="section_2_assessments_container">
        <h2 class="section_2_assessments_heading">why lernx?</h2>
        <p class="section_2_assessments_subheading">Lorem ipsum dolor sit amet consectetur. Fermentum aliquet blandit pellentesque pellentesque eleifend.</p>
        <div id="cards-container" class="row gap-5 justify-content-center container-fluid cards-container">
        </div>
      </div>

    </section>
    <section class="how-this-works-container">
      <div class="how-this-works-subcontainer">
        <h2 class="how-this-works_heading">How this works</h2>
        <div id="how-this-works-cards-container" class="row gap-5 how-this-works-cards-container justify-content-center container-fluid">
        </div>
      </div>
    </section>
    <section class="section_3_assessments">
      <div class="w-full tabs_container container bg-white">
        <h2 class="assessment_heading">
          Get prepared for
        </h2>
        <div class="tabs_shape">
          <div class="button-group mx-auto d-flex flex-wrap gap-4 justify-content-center align-items-center">
            <button class="button active" data-filter=".all">all</button>
            <button class="button" data-filter=".mba">MBA</button>
            <button class="button" data-filter=".govt">Govt Exams</button>
            <button class="button" data-filter=".banking">Banking exams</button>
          </div>

        </div>
        <div class="gallery w-100 h-100 align-items-center mx-auto justify-content-center">
          <div class="item d-flex justify-content-center position-relative align-items-center mx-auto w-100 h-100 container">
            <div class="options_container">

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
              <img src="../Assets/lernxLogo.svg" alt="" class="lernx_logo">
              <h2 class="assessment_heading">Assessment <span class="assessment_span">Pass</span>
            </div>
            </h2>
            <span class="assessment_access_span my-2">Get access to</span>
            <div class="d-flex row row-cols-lg-3 row-cols-sm-1 p-0 assessment_cards">
              <div class="d-flex align-items-center gap-2">
                <img src="../Assets/mockTest.svg" alt="">
                <span class="assessment_plan">300+ Mock test</span>
              </div>
              <div class="d-flex align-items-center gap-2">
                <img src="../Assets/Exam.svg" alt="">
                <span class="assessment_plan">Single subscription for 20+ exams</span>
              </div>
              <div class="d-flex align-items-center gap-2">
                <img src="../Assets/Money.svg" alt="">
                <span class="assessment_plan">One time payment for life</span>
              </div>
            </div>

          </div>
          <div class="assessment_right_container col-lg-4 mx-auto d-flex justify-content-center">
            <img src="../images/assessments.jpg" alt="" class="test_image mx-auto">
          </div>
        </div>
      </div>
    </section>
    <section class="section_5">
      <div class="container d-flex flex-column w-100">
        <h2 class="section_5_heading">Choose your pack</h2>
        <div class="subscription_card_container row row-cols-lg-6 justify-content-center mx-auto">
          <div class="subscription_card" style="width: 300px;">

          </div>
          <div class="subscription_card" style="width: 300px;">

          </div>
        </div>
      </div>
    </section>
    <section class="section_8 position-relative">
      <div class="container position-relative">
        <h2 class="section_8_heading">What people say about us</h2>
        <div class="testimonial-index mySwiper my-auto d-flex align-items-center justify-content-center">
          <div class="swiper-wrapper">
            <div class="slide swiper-slide">
              <div class="d-flex w-100 slide_container">
                <img src="/assets/User.svg" alt="" class="image">
                <div class="slide_content">
                  <h2 class="slide_name">pushkar poonia</h2>
                  <div class="d-flex">
                    <img src="/assets/Star.svg" alt="" class="slide_rating">
                    <img src="/assets/Star.svg" alt="" class="slide_rating">
                    <img src="/assets/Star.svg" alt="" class="slide_rating">
                    <img src="/assets/Star.svg" alt="" class="slide_rating">
                    <img src="/assets/Star.svg" alt="" class="slide_rating">

                  </div>
                </div>
              </div>
              <p class="slide_description px-5">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex-w-100 slide_container">
                <img src="../Assets/User.svg" alt="" class="image">
                <div class="slide_content">
                  <h2 class="slide_name">pushkar poonia</h2>
                  <div class="d-flex">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                  </div>
                </div>
              </div>
              <p class="slide_description px-5">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex-w-100 slide_container">
                <img src="../Assets/User.svg" alt="" class="image">
                <div class="slide_content">
                  <h2 class="slide_name">pushkar poonia</h2>
                  <div class="d-flex">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                  </div>
                </div>
              </div>
              <p class="slide_description px-5">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
            </div>
            <div class="slide swiper-slide position-relative">
              <div class="d-flex-w-100 slide_container">
                <img src="../Assets/User.svg" alt="" class="image">
                <div class="slide_content">
                  <h2 class="slide_name">pushkar poonia</h2>
                  <div class="d-flex">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                    <img src="../Assets/Star.svg" alt="" class="slide_rating">
                  </div>
                </div>
              </div>
              <p class="slide_description px-5">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
            </div>
          </div>
          <div class="swiper-button-prv nav-btn1">
            <img src="../Assets/PrevLogo.svg" alt="">
          </div>
          <div class="swiper-button-nxt nav-btn2">
            <img src="../Assets/NextLogo.svg" alt="">
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>

    </section>
    <section class="section_9">
      <div class="container d-flex flex-column align-items-center">
        <h2 class="section_9_heading">Frequently asked questions</h2>
        <div class="d-flex w-100 queries_container justify-content-center faq-contaniner-index">
          <div class="accordion w-100" id="accordionExample">
            <div class="accordion-item w-100 my-2 rounded-4">
              <h2 class="accordion-header">
                <div class="accordion-button-faq-index collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_11" aria-expanded="true" aria-controls="collapse_11">
                  <div class="d-flex justify-content-between w-100">
                    <p class="my-auto text-capitalize accordian_text">question 1</p>
                    <img src="../Assets/dropdownIcon.svg" alt="" class="my-auto mx-2">
                  </div>
                </div>
              </h2>
              <div id="collapse_11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item  my-2 rounded-4">
              <h2 class="accordion-header">
                <div class="accordion-button-faq-index collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_12" aria-expanded="true" aria-controls="collapse_12">
                  <div class="d-flex justify-content-between w-100">
                    <p class="my-auto text-capitalize accordian_text">question 2</p>
                    <img src="../Assets/dropdownIcon.svg" alt="" class="my-auto mx-2">

                  </div>
                </div>
              </h2>

              <div id="collapse_12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item my-2 rounded-4">
              <h2 class="accordion-header">
                <div class="accordion-button-faq-index collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_13" aria-expanded="true" aria-controls="collapse_13">
                  <div class="d-flex justify-content-between w-100">
                    <p class="my-auto text-capitalize accordian_text">question 3</p>
                    <img src="../Assets/dropdownIcon.svg" alt="" class="my-auto mx-2">

                  </div>
                </div>
              </h2>

              <div id="collapse_13" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item my-2 rounded-4">
              <h2 class="accordion-header">
                <div class="accordion-button-faq-index collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_14" aria-expanded="true" aria-controls="collapse_14">
                  <div class="d-flex justify-content-between w-100">
                    <p class="my-auto text-capitalize accordian_text">question 4</p>
                    <img src="../Assets/dropdownIcon.svg" alt="" class="my-auto mx-2">

                  </div>
                </div>
              </h2>

              <div id="collapse_14" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item my-2 rounded-4">
              <h2 class="accordion-header">
                <div class="accordion-button-faq-index collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_15" aria-expanded="true" aria-controls="collapse_15">
                  <div class="d-flex justify-content-between w-100">
                    <p class="my-auto text-capitalize accordian_text">question 5</p>
                    <img src="../Assets/dropdownIcon.svg" alt="" class="my-auto mx-2">

                  </div>
                </div>
              </h2>

              <div id="collapse_15" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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





  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      grabCursor: true,
      initialSlide: 0,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".nav-btn2",
        prevEl: ".nav-btn1",
      },
      breakpoints: {
        1024: {
          slidesPerView: 2,
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
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="../script/assessments.js"></script>
</body>

</html>