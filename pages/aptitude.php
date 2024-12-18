<?php

$testName = $_GET['test'];
$ctg = $_GET['ctg'];

?>




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
  <!-- Navbar Section -->
  <nav id="navBar" class="navbar_index d-none d-lg-flex">
    <div class="navContainer_index">
      <div class="p-2 w-100 d-flex align-items-center mx-auto justify-content-between">
        <img src="../Assets/Logo.svg" alt="Logo" class="navLogo" />
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
  <!-- Navbar Section End-->

  <?php 

      if(!isset($testName)){
  ?>
    <main 
      class="w-100  d-flex align-items-center justify-content-center"
        style="height: 80vh"
    >
      <h1 class="text-center">No Test Found</h1>
    </main>
        

  <?php
      }elseif (!isset($ctg)) {

  ?>
    <main 
      class="w-100  d-flex align-items-center justify-content-center"
        style="height: 80vh"
    >
      <h1 class="text-center">No Test Category Found</h1>
    </main>

  <?php

      }      
      else{
  ?>
    <!-- Section Loading-->
    <main 
    id="loading-screen"
    class="w-100  d-flex flex-direction-column gap-4 align-items-center justify-content-center"
      style="height: 80vh"
    >
      <div class="spinner-border text-success" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>

      <h4 class="text-center">Loading, Please wait...</h4>
    </main>
    <!-- Section Loading End  -->

    <!-- Main Section-->
    <main 
        id="main-section"
    class="w-100 h-100 d-none">
      <section class="aptitude-section">
        <div class="aptitude-container container">
          <div class="aptitude-header-container">
            <img src="../Assets/backArrow.svg" alt="" class="backArrow">
            <h2 
            id="aptitude-header"
            class="aptitude-header">aptitude</h2>
            <img src="../Assets/rightArrow.svg" alt="" class="rightArrow">
            <span 
            id="mock-text"
            class="mock-text"></span>
          </div>
          <div class="question-quiz-container">
            <div class="h-100">
              <div class="aptitude-question-title-container">
                <p class="active-question"></p>
                <div class="timer-container">
                  <img src="../Assets/timer.svg" alt="" class="timer-icon">
                  <span class="time-remain-text">time remaining</span>
                  <span class="timer">00:00</span>
                </div>
              </div>
              <div class="question-quiz-container-left">
                <div class="question-number">
                  <p>question</p>
                  <button id="skip-question">skip question</button>
                </div>
                <div class="question-text">
                  <h2 class="question-title">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                    the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum
                    may be used as a placeholder before the final copy is available.</h2>
                  <div class="option-container">
                    <span class="option-label">options</span>
                    <ul>
                      <li>
                        <div class="select-option">
                          <button>A</button>
                          <input type="radio" name="answer" id="a" class="answer">
                        </div>
                        <label for="a" id="a_text">

                        </label>
                      </li>
                      <li>
                        <div class="select-option">
                          <button>B</button>
                          <input type="radio" name="answer" id="b" class="answer">
                        </div>
                        <label for="b" id="b_text"></label>
                      </li>
                      <li>
                        <div class="select-option">
                          <button>C</button>
                          <input type="radio" name="answer" id="c" class="answer">
                        </div>
                        <label for="c" id="c_text">

                        </label>
                      </li>
                      <li>
                        <div class="select-option">
                          <button>D</button>
                          <input type="radio" name="answer" id="d" class="answer">
                        </div>
                        <label for="d" id="d_text">

                        </label>
                      </li>
                    </ul>
                  </div>
                  <div class="button-container">

                    <div>
                      <button class="clear-response-btn">clear response</button>
                      <button class="mark-review-btn">mark for review & next</button>
                    </div>
                    <div>
                      <button class="next-btn">next</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-quiz-container-right mt-5">
              <h2>question</h2>
              <div class="current-question-progress"> </div>
              <div class="status-container">
                <div>
                  <p class="answered-count">0</p>
                  <span>answered</span>
                </div>
                <div>
                  <p class="unanswered-count">0</p>
                  <span>not answered</span>
                </div>
                <div>
                  <p class="marked-review-count">0</p>
                  <span>marked for review</span>
                </div>
                <div>
                  <p class="answered-marked-review-count">0</p>
                  <span>Answered & Marked for Review</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="solution-container">
          <div class="container">
            <h2>solution</h2>
          </div>
        </div>
        <div id="modal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modal-text"></p>
          </div>
        </div>
      </section>
    </main>
    <!-- Main Section End-->

  <?php
        }
    
  ?>



  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  <script type="text/javascript">
    var testName = "<?php echo $testName; ?>";
    var ctg = "<?php echo $ctg; ?>";
  </script>
  
  <script 
    type="module"
  src="../script/aptitude.js"></script>
</body>

</html>