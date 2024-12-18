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
    <section class="section_1_courses">
      <div class="section_1_courses-bg-div">
      <nav class="navbar-courses d-lg-flex d-none py-4">
          <div class="navContainer-courses">
            <img src="../Assets/lernxLogo.svg" alt="Logo" class="navLogo" />
           
          </div>
      </nav>
        <nav class="navbar nav-m-courses d-lg-none py-3 position-relative">
          <div class="mobileNavContainer-index">
            <img src="../Assets/Logo.svg" alt="Logo" class="mobileNav" />
            <button class="navbar-toggler border-1 border-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
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
                Courses <img src="../Assets/dropdownArrowMobile.svg" alt="" class="dropdownArrow">
              </a>
              <ul class="dropdown-menu mt-3" aria-labelledby="coursesDropdown">
                <li><a class="dropdown-item" href="#">Course 1</a></li>
                <li><a class="dropdown-item" href="#">Course 2</a></li>
              </ul>
              <a href="/pages/notes.html">academics</a>
            </div>
          </div>
        </div>
        <div class="section_1_courses_container mx-auto row row-cols-lg-2 row-cols-sm-1">
          <div class="col-md-6 gap-0 col-lg-6 col-md-12 py-lg-5">
            <div class="my-4 gap-2 courses-container-left">
              <h2 class="courses-heading">Explore top Online courses
              </h2>
              <p class="courses-para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam fugiat tempore assumenda harum maiores temporibus labore blanditiis expedita commodi. Aliquam odio culpa consectetur
                et dignissimos excepturi iste omnis pariatur dolor.</p>
              <div class="my-4">
                <button class="explore-btn">
                  <img src="../Assets/downArrow.svg" alt="" class="explore-down-arrow">
                  Explore</button>
              </div>

            </div>
          </div>
          <div class="col-lg-6 mx-auto d-flex">
            <img src="../Assets/courses-hero-img.svg" alt="" class="courses-hero-img container">
          </div>
        </div>
      </div>
    </section>
    <section class="all-courses">
      <div class="tabs_shape">
        <div class="button-group mx-auto d-flex flex-wrap gap-4 ">
          <button class="button active" data-filter=".all">all</button>
          <button class="button" data-filter=".mba">MBA</button>
          <button class="button" data-filter=".govt">Govt Exams</button>
          <button class="button" data-filter=".banking">Banking exams</button>
        </div>
        <hr>
      </div>
      <div class="gallery w-100 h-100">
        <div class="item d-flex position-relative w-100 h-100 container">
          <div class="courses_container w-100">

          </div>
        </div>

      </div>
    </section>

    <section class="why-choose-lernx px-4">
      <h2 class="why-choose-lernx-heading">Why to choose lernx</h2>
      <div class="why-choose-lernx-main-container">
        <div class="why-choose-lernx-container">
          <table class="comparison-table">
            <thead>
              <th>&nbsp;</th>
              <th><img src="../Assets/lernx-icon.svg" alt=""></th>
              <th>Free resources</th>
              <th>Other platforms</th>
            </thead>
            <tbody class="p-4">
              <tr class="">
                <td>Comparison item</td>
                <td>✅</td>
                <td>✅</td>
                <td>✅</td>
              </tr>
              <tr>
                <td>Comparison item</td>
                <td>✅</td>
                <td>✅</td>
                <td>❌</td>

              </tr>
              <tr>
                <td>Comparison item</td>
                <td>✅</td>
                <td>✅</td>
                <td>✅</td>
              </tr>
              <tr>
                <td>Comparison item</td>
                <td>✅</td>
                <td>❌</td>
                <td>❌</td>

              </tr>
              <tr>
                <td>Comparison item</td>
                <td>✅</td>
                <td>❌</td>
                <td>❌</td>

              </tr>
              <tr>
                <td>Comparison item</td>
                <td>✅</td>
                <td>❌</td>
                <td>❌</td>

              </tr>
              <tr>
                <td>Comparison item</td>
                <td>✅</td>
                <td>❌</td>
                <td>❌</td>
              </tr>

            </tbody>
          </table>
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
              <div class="d-flex w-100 slide_container">
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
  <script src="../script/courses.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>