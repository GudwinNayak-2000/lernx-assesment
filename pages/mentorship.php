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
  <nav id="navBar" class="navbar_index d-none d-lg-flex">
    <div class="navContainer_index">
      <div class="p-2 w-100 d-flex align-items-center mx-auto justify-content-between">
        <img src="../Assets/Logo.svg" alt="Logo" class="navLogo" />
        <div class="navLinks">
          <a class="" href="/">home</a>
          <a class="" href="../pages/assessments.html">assessments</a>
          <a class="dropdown gap-2" id="trainingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Trainings <img src="../Assets/DropdownArrow.svg" alt="" class="dropdownArrow">
          </a>
          <ul class="dropdown-menu mt-3" aria-labelledby="trainingsDropdown">
            <a class="dropdown-item" href="#">Training 1</a>
            <a class="dropdown-item" href="#">Training 2</a>
          </ul>
          <a class="dropdown gap-2" id="coursesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Courses <img src="../Assets/DropdownArrow.svg" alt="" class="dropdownArrow">
          </a>
          <ul class="dropdown-menu mt-3" aria-labelledby="coursesDropdown">
            <li><a class="dropdown-item" href="#">Course 1</a></li>
            <li><a class="dropdown-item" href="#">Course 2</a></li>
          </ul>
          <a class="" href="../pages/audiobooks.html">academics</a>
        </div>
        <a href="../pages/HomePage.html">
          <button class="login-btn-index">Login</button>
        </a>
      </div>

    </div>

  </nav>

  <nav class="navbar d-lg-none py-3 position-relative">
    <div class="mobileNavContainer-index">
      <img src="../Assets/Logo.svg" alt="Logo" class="mobileNav" />
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
        <a href="../pages/assessments.html">assignments</a>
        <a class="dropdown d-flex gap-2" id="trainingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Trainings <img src="../Assets/dropdownArrowMobile.svg" alt="" class="dropdownArrow">
        </a>
        <ul class="dropdown-menu mt-3" aria-labelledby="trainingsDropdown">
          <a class="dropdown-item" href="#">Training 1</a>
          <a class="dropdown-item" href="#">Training 2</a>
        </ul>
        <a class="dropdown gap-2" id="coursesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Courses <img src="../Assets/dropdownArrowMobile.svg" alt="" class="dropdownArrow">
        </a>
        <ul class="dropdown-menu mt-3" aria-labelledby="coursesDropdown">
          <li><a class="dropdown-item" href="#">Course 1</a></li>
          <li><a class="dropdown-item" href="#">Course 2</a></li>
        </ul>
        <a href="../pages/notes.html">academics</a>
      </div>
    </div>
  </div>
  <main class="w-100">
    <section class="section_1_mentorship">
      <div class="container row w-full h-full">
        <div class="col-lg-6 hero_section_left">
          <div class="d-flex flex-column">
            <div class="section_1_mentorship_heading">Lernx<span class="section_1_span">Mentorship</span>Program</div>
            <p class="section_1_mentorship_ubheading">Tailored Guidance for College Students and Working Professionals.</p>
            <img src="../Assets/mentorship.svg" alt="" class="mentorship_bundle">
            <button class="access_btn">Book your session now</button>
          </div>
        </div>
        <div class="col-lg-6 hero_section_right">
          <img src="../Assets/mentorshipHero.svg" alt="" class="assessment_illustration container">
        </div>
      </div>
    </section>
    <section class="section_2">
      <div class="container w-100">
        <h2 class="section_2_heading">Why choose us?</h2>
        <div class="row feature_rows mx-auto">
          <div class="col-lg-4 col-sm-12 features_card row-gap-3">
            <div class="p-lg-4">
              <img src="../Assets/LiveClass.svg" alt="" class="my-2">
              <h2 class="features_card_heading my-2">1:1 session</h2>

            </div>
          </div>
          <div class="col-lg-4 col-sm-12 features_card">
            <div class="p-lg-4">
              <img src="../Assets/PlacementAssistant.svg" alt="img" class="my-2">
              <h2 class="features_card_heading my-2">Roadmaps</h2>

            </div>
          </div>
          <div class="col-lg-4 col-sm-12 features_card">
            <div class="p-lg-4">
              <img src="../Assets/Internship.svg" alt="img" class="my-2">
              <h2 class="features_card_heading my-2">Industry experts</h2>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 features_card">
            <div class="p-lg-4">
              <img src="../Assets/Projects.svg" alt="img" class="my-2">
              <h2 class="features_card_heading my-2">roadmaps</h2>
            </div>
          </div>

        </div>

    </section>
    <section class="section_3_mentorship">
      <div class="w-full tabs_container container">
        <h2 class="section_3_mentorship_heading">
          How this works
        </h2>
        <div id="cards-container" class="row gap-4 container justify-content-center w-full">
        </div>
      </div>
    </section>
    <section class="section_4">
      <div class="section_4_container mx-auto gap-4">
        <div class="d-flex flex-column">
          <h2 class="section_4_heading">Explore our top</h2>
          <h2 class="section_4_subheading">mentorship programs</h2>
          <span class="section_4_span">1:1 sessions</span>
        </div>
        <div class="accordion container" id="accordionExample">
          <div class="accordion-item-custom my-4 rounded-4">
            <h2 class="accordion-header">
              <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="d-flex justify-content-between w-100">
                  <p class="my-auto text-capitalize accordian_text accordion-custom-color">mentorship detail</p>
                </div>
              </div>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body h-auto w-100">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item-custom my-4 rounded-4">
            <h2 class="accordion-header">
              <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                <div class="d-flex justify-content-between w-100">
                  <p class="my-auto text-capitalize accordian_text accordion-custom-color">mentorship detail</p>
                </div>
              </div>
            </h2>

            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body h-auto w-100">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item-custom my-4 rounded-4">
            <h2 class="accordion-header">
              <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                <div class="d-flex justify-content-between w-100">
                  <p class="my-auto text-capitalize accordian_text accordion-custom-color">mentorship detail</p>
                </div>
              </div>
            </h2>

            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body h-auto w-100">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item-custom my-4 rounded-4">
            <h2 class="accordion-header">
              <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse4" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapseOne">
                <div class="d-flex justify-content-between w-100">
                  <p class="my-auto text-capitalize accordian_text accordion-custom-color">mentorship detail</p>
                </div>
              </div>
            </h2>

            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body h-auto w-100">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item-custom my-4 rounded-4">
            <h2 class="accordion-header">
              <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                <div class="d-flex justify-content-between w-100">
                  <p class="my-auto text-capitalize accordian_text accordion-custom-color">mentorship detail</p>
                </div>
              </div>
            </h2>

            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body h-auto w-100">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <section class="section_5 p-2">
      <div class="section_5_container row column-gap-1">
        <div class="section_5_image_container col-lg-4 mx-auto justify-content-center d-flex align-items-center">
          <img src="../images/dummyImage.jpg" alt="image" class="section_5_image">
        </div>
        <div class="col-lg-7 section_5_right_container">
          <h2 class="section_5_right_heading">Get your right mentor now</h2>
          <span class="section_5_right_span">Find your right mentor now</span>
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
  <script src="/script/mentorship.js"></script>
</body>

</html>