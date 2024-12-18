<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>LernX |AudioBooks</title>
</head>

<body class="">
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
    <div class="mobileNavContainer">
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
  <main>
    <section class="audio_books_section_1">
      <h2 class="audio_books_section_1_heading">Explore Top audio books</h2>
      <div class="search_container">
        <img src="../Assets/SearchIcon.svg" alt="">
        <input type="text" placeholder="Search here" class="search_input">
        <div class="dropdowns-container p-4 row w-100 gap-2 justify-content-center">
          <div class="custom-select-wrapper col-3">
            <div class="custom-select" onclick="toggleDropdown('options1')">
              Institution:

            </div>
            <div class="custom-select-options" id="options1">
              <div class="custom-select-option" onclick="selectOption('Option 1')">Option 1</div>
              <div class="custom-select-option" onclick="selectOption('Option 2')">Option 2</div>
              <div class="custom-select-option" onclick="selectOption('Option 3')">Option 3</div>
            </div>
          </div>
          <div class="custom-select-wrapper col-3">
            <div class="custom-select" onclick="toggleDropdown('options2')">
              Type:

            </div>
            <div class="custom-select-options" id="options2">
              <div class="custom-select-option" onclick="selectOption('Option 1')">Option 1</div>
              <div class="custom-select-option" onclick="selectOption('Option 2')">Option 2</div>
              <div class="custom-select-option" onclick="selectOption('Option 3')">Option 3</div>
            </div>
          </div>
          <div class="custom-select-wrapper col-3">
            <div class="custom-select" onclick="toggleDropdown('options3')">
              Program:

            </div>
            <div class="custom-select-options" id="options3">
              <div class="custom-select-option" onclick="selectOption('Option 1')">Option 1</div>
              <div class="custom-select-option" onclick="selectOption('Option 2')">Option 2</div>
              <div class="custom-select-option" onclick="selectOption('Option 3')">Option 3</div>
            </div>
          </div>
          <div class="custom-select-wrapper col-3">
            <div class="custom-select" onclick="toggleDropdown('options3')">
              Program:

            </div>
            <div class="custom-select-options" id="options3">
              <div class="custom-select-option" onclick="selectOption('Option 1')">Option 1</div>
              <div class="custom-select-option" onclick="selectOption('Option 2')">Option 2</div>
              <div class="custom-select-option" onclick="selectOption('Option 3')">Option 3</div>
            </div>
          </div>
        </div>
    </section>
    <section class="audio_books_section_2">
      <h2 class="audio_books_section_2_heading">most popular</h2>
      <div class="w-100 d-flex flex-column justify-content-center align-items-center">
        <div class="audio_books_slider mySwiper my-auto d-flex align-items-center justify-content-center">
          <div class="audio_books_slider swiper-wrapper">
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC1</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC2</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC3</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC4</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC5</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC6</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC7</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC8</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC9</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC10</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC11</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC12</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>
            <div class="slide swiper-slide">
              <div class="d-flex slide_container">
                <div class="slide_content">
                  <h2 class="audio_card_heading">How to crack UPSC13</h2>
                  <p class="audio_card_subheading">5:00</p>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>

          <div class="swiper-button-prv nav-btn1">
            <img src="../Assets/PrevLogo.svg" alt="">
          </div>
          <div class="swiper-button-nxt nav-btn2">
            <img src="../Assets/NextLogo.svg" alt="">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      grabCursor: true,
      initialSlide: 0,
      loop: false,
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
          slidesPerView: 5,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 2,
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
    function toggleDropdown(optionsId) {
      var dropdown = document.getElementById(optionsId);
      dropdown.classList.toggle("active");
    }

    function selectOption(option) {
      var dropdown = document.querySelector('.custom-select-options.active');
      var select = dropdown.previousElementSibling;
      select.textContent = option;
      dropdown.classList.remove("active");
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
      var dropdowns = document.querySelectorAll('.custom-select-options');
      dropdowns.forEach(function(dropdown) {
        var select = dropdown.previousElementSibling;
        if (!dropdown.contains(event.target) && !select.contains(event.target)) {
          dropdown.classList.remove("active");
        }
      });
    });
  </script>
</body>

</html>