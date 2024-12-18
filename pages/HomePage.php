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
  <nav id="navBar" class="navbar_index d-none d-lg-flex">
    <div class="navContainer_index">
      <div class="p-2 w-100 d-flex align-items-center mx-auto justify-content-between">
        <img src="../Assets/Logo.svg" alt="Logo" class="navLogo" />
        <div class="navLinks">
          <a class="" href="../index.php">home</a>
          <a class="" href="./assessments.php">assessments</a>
          <a class="dropdown gap-2" href="./training.php" id="trainingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Trainings
          </a>
          <a class="dropdown gap-2" href="./courses.php" id="coursesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Courses
          </a>
          <a class="" href="./notes.php">academics</a>
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
        <a href="../index.php">home</a>
        <a href="./assessments.php">assignments</a>
        <a class="dropdown d-flex gap-2" href="./training.php" id="trainingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Trainings
        </a>
      
        <a class="dropdown gap-2" href="./courses.php" id="coursesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Courses
        </a>
       
        <a href="./notes.php">academics</a>
      </div>
    </div>
  </div>
  <!-- Navbar Section -->

  <!-- Main Section -->
  <main class="w-100">
    <!-- Hero Section -->
    <section class="section_1_index p-2">
      <div class="section_1_index_container mx-auto row row-cols-lg-2 row-cols-sm-1">
        <div class="col-md-6 gap-0 col-lg-6 col-md-12 hero_section_left">
          <div class="my-4 gap-2">
            <h2 class="heading">Unlock Your Future in
              <span class="heading_span">Digital Marketing</span>
            </h2>
            <p>Are you ready to dive into the dynamic world of digital marketing? Our 8-week Industrial Training Program with Internship offers you a unique blend of practical training and real-world experience.</p>
            <div class="batch_button">
              <div class="batch_button_content">
                <span class="button_content_span1">
                  next batch
                </span>
                <span class="button_content_span2">
                  20 march
                </span>
              </div>
              <div class="batch_button_content">
                <span class="button_content_span1">
                  seats left
                </span>
                <span class="button_content_span2">
                  10/30
                </span>
              </div>
            </div>
            <button class="book_seat_btn">Book your seat now</button>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="../Assets/Hero_illustration.svg" alt="" class="hero_img">
        </div>
      </div>
    </section>
    <!-- Hero Section -->
    <!-- Why choose us section -->
    <section class="section_2_index">
      <h2 class="section_2_index_heading text-center">Why choose us</h2>
      <div class="row row-cols-md-2 feature_rows">
        <div class="col-sm-6 col-md-4 col-lg-3 features_card row-gap-3">
          <div class="">
            <img src="../Assets/LiveClass.svg" alt="" class="my-2 feature_card_img">
            <h2 class="features_card_heading my-2">live classes</h2>
            <p class="features_card_subheading">Engage in real-time with live, interactive classes by
              industry experts, offering immediate feedback and active learning experiences.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 features_card">
          <div>
            <img src="../Assets/PlacementAssistant.svg" alt="" class="my-2 feature_card_img">
            <h2 class="features_card_heading my-2">placement assistant</h2>
            <p class="features_card_subheading">Get a personalized mentorship program tailored to your needs,
              providing guidance and support to help you achieve your goals."</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 features_card">
          <div>
            <img src="../Assets/Internship.svg" alt="" class="my-2 feature_card_img">
            <h2 class="features_card_heading my-2">guaranteed internship</h2>
            <p class="features_card_subheading">Embark on a guaranteed internship, applying classroom knowledge
              to real-world digital marketing projects under expert guidance.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 features_card">
          <div>
            <img src="../Assets/Projects.svg" alt="" class="my-2 feature_card_img">
            <h2 class="features_card_heading my-2">3 projects</h2>
            <p class="features_card_subheading">Showcase your digital marketing prowess with three hands-on projects,
              designed to build your portfolio and practical skills.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 features_card">
          <div>
            <img src="../Assets/IndustrialMentor.svg" alt="" class="my-2 feature_card_img">
            <h2 class="features_card_heading my-2">Industrial Mentor</h2>
            <p class="features_card_subheading">Learn directly from seasoned industrial mentors, gaining insider
              insights and contemporary practices in digital marketing.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 features_card">
          <div>
            <img src="../Assets/Certificate.svg" alt="" class="my-2 feature_card_img">
            <h2 class="features_card_heading my-2">certified</h2>
            <p class="features_card_subheading">Earn a recognized certification upon completion,
              affirming your expertise and enhancing your employability in the digital marketing field. </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Why choose us section -->

    <!-- Project based learning -->
    <section class="section_3_index">
      <h2 class="section_3_heading_learning">project based learning</h2>
      <p class="section_3_subheading_index">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or</p>
      <div class="card_container container">
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-4 my-auto d-flex justify-content-center  row-gap-lg-5">
          <div class="card_container">
            <div class="card_shape">
              <div class="card_ribbon">

              </div>
            </div>
          </div>
          <div class="card_container">
            <div class="card_shape">
              <div class="card_ribbon">

              </div>
            </div>
          </div>
          <div class="card_container">
            <div class="card_shape">
              <div class="card_ribbon">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Project based learning -->
    <section class="section_4">
      <div class="container d-flex justify-content-center">
        <div class="d-flex row row-cols-lg-2 purchase_card justify-content-center">
          <div class="d-flex flex-wrap gap-2 flex-lg-nowrap justify-content-center align-items-center">
            <div class="card_content mx-1">
              <img src="../Assets/TimerLogo.svg" alt="">
              <span class="card_content_span_1">4</span>
              <span class="card_content_span_2">weeks</span>
            </div>
            <div class="card_content mx-1">
              <img src="../Assets/ModuleLogo.svg" alt="">
              <span class="card_content_span_1">10+</span>
              <span class="card_content_span_2">modules</span>
            </div>
            <div class="card_content mx-1">
              <img src="../Assets/TimeLogo.svg" alt="">
              <span class="card_content_span_1">20+</span>
              <span class="card_content_span_2">hours</span>
            </div>
          </div>
          <div class="purchase_card_right col-lg-5 my-4">
            <h2 class="purchase_card_heading">Limited Period Offer</h2>
            <span class="purchase_card_span">3999/-</span>
            <button class="purchase_card_btn">4999/- only</button>
          </div>
        </div>
      </div>
    </section>
    <section class="section_5 px-3 py-5">
      <div class="classes_card container">
        <div class="px-md-4 px-lg-5">
          <h2 class="classes_week px-1">week 1</h2>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item my-2 rounded-4">
              <h2 class="accordion-header">
                <div class="accordion_button_index collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="d-flex justify-content-between w-100">
                    <p class="my-auto text-capitalize accordian_text">fundamentals of digital marketing</p>
                    <div>
                      <button class="accordion_btn mx-2">2 classes</button>
                      <img src="../Assets/dropdownIcon.svg" alt="">
                    </div>
                  </div>
                </div>
              </h2>

              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item  my-2 rounded-4">
              <h2 class="accordion-header">
                <div class="accordion_button_index collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <div class="d-flex justify-content-between w-100">
                    <p class="my-auto text-capitalize accordian_text">fundamentals of digital marketing</p>
                    <div>
                      <button class="accordion_btn mx-2">2 classes</button>
                      <img src="../Assets/dropdownIcon.svg" alt="">
                    </div>
                  </div>
                </div>
              </h2>

              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item my-2 rounded-4">
              <h2 class="accordion-header">
                <div class="accordion_button_index collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  <div class="d-flex justify-content-between w-100">
                    <p class="my-auto text-capitalize accordian_text">fundamentals of digital marketing</p>
                    <div>
                      <button class="accordion_btn mx-2">2 classes</button>
                      <img src="../Assets/dropdownIcon.svg" alt="">
                    </div>
                  </div>
                </div>
              </h2>

              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="px-md-4 px-lg-5">
          <h2 class="classes_week px-1">week 2</h2>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item  my-2 rounded-4">
              <h2 class="accordion-header">
                <div class="accordion_button_index collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  <div class="d-flex justify-content-between w-100">
                    <p class="my-auto text-capitalize accordian_text">fundamentals of digital marketing</p>
                    <div>
                      <button class="accordion_btn mx-2">2 classes</button>
                      <img src="../Assets/dropdownIcon.svg" alt="">
                    </div>
                  </div>
                </div>
              </h2>

              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item  my-2 rounded-4">
              <h2 class="accordion-header">
                <div class="accordion_button_index collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                  <div class="d-flex justify-content-between w-100">
                    <p class="my-auto text-capitalize accordian_text">fundamentals of digital marketing</p>
                    <div>
                      <button class="accordion_btn mx-2">2 classes</button>
                      <img src="../Assets/dropdownIcon.svg" alt="">
                    </div>
                  </div>
                </div>
              </h2>

              <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item my-2 rounded-4">
              <h2 class="accordion-header">
                <div class="accordion_button_index collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                  <div class="d-flex justify-content-between w-100">
                    <p class="my-auto text-capitalize accordian_text">fundamentals of digital marketing</p>
                    <div>
                      <button class="accordion_btn mx-2">2 classes</button>
                      <img src="../Assets/dropdownIcon.svg" alt="">
                    </div>
                  </div>
                </div>
              </h2>

              <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section_6">
      <div class="container mx-auto w-100 d-flex justify-content-center">
        <div class="row row-cols-lg-2 row-cols-sm-1 w-100 gap-4 help_support_container_index">
          <div class="col-lg-8 help_support_left_container_index">
            <h2 class="help_support_heading_index">Have any further questions?</h2>
            <button class="help_support_btn">Request a call back</button>
          </div>
          <div class="col-lg-2 help_support_right_container_index">
            <img src="../Assets/Help&Support.svg" alt="" class="help_image mx-auto">
          </div>
        </div>
      </div>
    </section>
    <section class="section_7">
      <div class="container">
        <h2 class="text-center">certification</h2>
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <img src="../Assets/CertificateOfAppreciation.svg" alt="">
          </div>
          <div class="col-lg-6 col-sm-12">
            <img src="" alt="content">
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
              <p class="slide_description">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
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
              <p class="slide_description">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
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
              <p class="slide_description">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
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
              <p class="slide_description">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
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
            <img src="/assets/Logo.svg" alt="" class="footer_logo">
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
          spaceBetween: 100,
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
  <script>
    const trainingsDropdown = document.querySelector('.trainings-dropdown');

    trainingsDropdown.addEventListener('click', () => {
      const dropdownMenu = trainingsDropdown.nextElementSibling;
      dropdownMenu.classList.toggle('show');
    });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>