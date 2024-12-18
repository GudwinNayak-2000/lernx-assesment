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

<body>
  <main>
    <!-- Hero Section -->
    <section class="section_1_digital_marketing">
      <nav class="navbar-digital-marketing d-lg-flex d-none">
          <div class="navContainer-marketing">
            <img src="../Assets/lernxLogo.svg" alt="Logo" class="navLogo" />
            <div class="navLinks-digital-marketing">
              <a class="" href="/">home</a>
              <a class="" href="../pages/assessments.html">assessments</a>
              <a class="dropdown gap-1" id="trainingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Trainings <img src="../Assets/dropdownArrowMobile.svg" alt="" class="dropdownArrow">
              </a>
              <ul class="dropdown-menu mt-3" aria-labelledby="trainingsDropdown">
                <a class="dropdown-item" href="#">Training 1</a>
                <a class="dropdown-item" href="#">Training 2</a>
              </ul>
              <a class="dropdown gap-1" id="coursesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Courses <img src="../Assets/dropdownArrowMobile.svg" alt="" class="dropdownArrow">
              </a>
              <ul class="dropdown-menu mt-3" aria-labelledby="coursesDropdown">
                <li><a class="dropdown-item" href="#">Course 1</a></li>
                <li><a class="dropdown-item" href="#">Course 2</a></li>
              </ul>
              <a class="" href="../pages/audiobooks.html">academics</a>
            </div>
          </div>
      </nav>
   <nav class="navbar navbar-dm d-lg-none py-3 position-relative">
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
      <section class="section_1_digital_marketing_container">
        <div class="section_1_dm_subcontainer">
          <div class="w-100">
            <div class="marketing-container-left">
            <h2 class="marketing-heading">Digital marketing
              <span class="marketing-heading_span">training program</span>
            </h2>
            <p class="marketing-para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam fugiat tempore assumenda harum maiores temporibus labore blanditiis expedita commodi. Aliquam odio culpa consectetur
              et dignissimos excepturi iste omnis pariatur dolor.</p>
            <div class="my-4 mx-auto">
              <button class="session-book-btn">Book your session now</button>
            </div>
            <div class="group-btns-marketing">
              <div class="group-btn-container">
                <span class="group-btn-heading">47k+</span>
                <span class="group-btn-span">linkedin followers</span>
              </div>
              <div class="vertical-line"></div>
              <div class="group-btn-container">
                <span class="group-btn-heading">100k+</span>
                <span class="group-btn-span">successful learners</span>
              </div>
              <div class="vertical-line"></div>
              <div class="group-btn-container">
                <span class="group-btn-heading">30+</span>
                <span class="group-btn-span">valuable programs</span>
              </div>
            </div>
            </div>
          </div>
          <img src="../Assets/digital-marketing-bg.svg" alt="" class="marketing-hero-img">
        </div>
      </section>
    </section>
    <section class="section_2_digital_marketing">
      <div class="section_2_digital_marketing_container">
        <span class="section_2_digital_marketing_heading">Who is it for?</span>
        <h2 class="section_2_digital_marketing_subheading">Build your career with a plan that works</h2>
        <div id="digital-marketing-card-container" class="row gap-5 digital-marketing-card-container justify-content-center container-fluid">
        </div>
      </div>
    </section>
    <section class="section_3_digital_marketing">
      <div class="section_3_digital_marketing_container">
        <h2 class="section_3_digital_marketing_heading">included</h2>
        <p class="section_3_digital_marketing_para">Lorem ipsum dolor sit amet consectetur. Amet sit commodo convallis pulvinar. Netus aliquet sit justo tristique dui turpis sit. At nibh aliquam semper nibh. Ultricies dignissim aliquet donec amet cursus laoreet pulvinar non</p>
        <div class="section_3_included_container">
          <div class="included-container-left">

          </div>
          <div class="included-container-right">
            <img src="../Assets/digital-marketing-included-image.svg" alt="">
          </div>
        </div>

      </div>
    </section>
    <section class="how-this-works-container digital-marketing-how-this-works-container">
      <div class="how-this-works-subcontainer">
        <h2 class="how-this-works_heading-marketing">How this works</h2>
        <div id="how-this-works-cards-container" class="row gap-5 how-this-works-cards-container justify-content-center container-fluid">
        </div>
      </div>
    </section>
    <section class="section_5 section-digital-marketing-acc px-3 py-5">
      <div class="classes_card dm-accordion container">
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
    <section class="section-slots-available px-4">
      <div class="section-slots-container container">
        <div class="section-slots-left">
          <h2 class="section-slots-heading">Only 20 Seats available</h2>
          <p class="section-slots-description">Don't miss the chance to enroll! Enroll now to receive an early bird discount.</p>
          <span class="section-slots-time">
            <span class="batch-start-text">
              batch starts -
            </span>
            <span class="section-slots-date">
              29 april
            </span>
          </span>
        </div>
        <div class="section-slots-right">
          <p class="section-slots-offer">Limited Period offer</p>
          <h2 class="section-slots-original-price">₹ 8999</h2>
          <h3 class="section-slots-price">₹ 699/- only</h3>
          <button class="section-slots-btn">select slot</button>
        </div>
      </div>
    </section>
    <section class="section_8 position-relative">
      <div class="container position-relative">
        <h2 class="section_8_heading-digital-marketing">What people say about us</h2>
        <div class="testimonial-index mySwiper digital-marketing-swiper my-auto d-flex align-items-center justify-content-center">
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
        <div class="swiper-pagination"></div>

      </div>

    </section>

    <section class="digital-marketing-faq">
      <div class="faq-container-dm">
        <div class="faq-container-dm-left">
          <p class="faq-container-dm-heading">FAQ</p>
          <h2 class="faq-container-dm-subheading">Still have question?</h2>
          <span class="faq-container-dm-mail">write us a mail</span>
          <button class="faq-container-dm-btn">Send a mail</button>
        </div>
        <div class="faq-container-dm-right">
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
      </div>
    </section>
    <footer class="footer-digital-marketing">
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
    const trainingsDropdown = document.querySelector('.trainings-dropdown');

    trainingsDropdown.addEventListener('click', () => {
      const dropdownMenu = trainingsDropdown.nextElementSibling;
      dropdownMenu.classList.toggle('show');
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
  <script src="../script/digital-marketing.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>