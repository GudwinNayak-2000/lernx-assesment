<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LernX | HRM</title>
  <link rel="stylesheet" href="../index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <main>
    <section class="section_1_hrm">
      <nav id="navBar" class="navbar_hrm d-none d-lg-flex">
        <div class="w-100 navContainer_hrm container mx-auto">
          <div class="p-2 w-100 row">
            <div class="d-flex col-10 align-items-center">
              <img src="../Assets/lernXHrm.svg" alt="Logo" class="navLogo" />
              <div class="navLinks">
          <a class="" href="../index.php">home</a>
          <a class="" href="./assessments.php">assessments</a>
          <a class="dropdown gap-2" id="trainingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Trainings <img src="../Assets/DropdownArrow.svg" alt="" class="dropdownArrow">
          </a>
          <ul class="dropdown-menu mt-3" aria-labelledby="trainingsDropdown">
          <a class="dropdown-item" href="./hrm.php">HRM</a>
          <a class="dropdown-item" href="./digital-marketing.php">Digital Marketing</a>
          <a class="dropdown-item" href="./mern-stack-training.php">MERN Stack</a>
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
            </div>
            <div class="col-2">
              <button class="enroll-btn cols-4">Enroll now</button>
            </div>
          </div>
        </div>
      </nav>
      <nav class="d-lg-none container mobileNavContainer p-4">
        <div data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <img src="../Assets/menu.svg" alt="" class="mobileMenu p-2">
        </div>
        <img src="../Assets/lernXmobilelogo.svg" alt="" class="" class="mobileLogo">
      </nav>
      <div class="offcanvas offcanvas-end bg-black w-100" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
          <h5 id="offcanvasRightLabel">Offcanvas right</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          ...
        </div>
      </div>
      <div class="section_1_hrm_container row container mx-auto">
        <div class="col-lg-8 hero_section_left_hrm">
          <div class="w-100 h-100">
            <div class="">
              <div class="heading_container">
                <h2 class="d-lg-flex d-none">Industrial training program</h2>
                <h1 class="d-lg-flex d-none section_1_hrm_heading">Human Resource Management</h1>
                <h1 class="d-lg-none d-flex text-center">training program for HRM</h1>
                <p class="d-lg-flex d-none">Lorem ipsum dolor sit amet consectetur. Fermentum vel quisque viverra fermentum turpis vitae tristique.
                  Ipsum lobortis et mauris massa in pellentesque.</p>
              </div>
              <div class="btn-container d-lg-flex d-none">
                <div class="program-btn-container">
                  <button class="program-btn">5k+ learner</button>
                  <button class="program-btn">4.7 Program rating</button>
                </div>
                <button class="enroll-btn1">enroll now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 hero_section_right_hrm d-flex flex-column">
          <img src="../images/hrm_hero_image.png" alt="" class="hrm_hero_img">
          <img src="../Assets/bg_shape.svg" alt="" class="bg-shape_hrm d-lg-flex d-none">
          <img src="../Assets/bg-shape-m.svg" alt="" class="bg-shape_hrm d-lg-none">
        </div>
        <p class="d-flex d-lg-none text-center description-mobile">Lorem ipsum dolor sit amet consectetur. Fermentum vel quisque viverra fermentum turpis vitae tristique.
          Ipsum lobortis et mauris massa in pellentesque.</p>
        <div class="w-100 mx-auto d-flex justify-content-center">
          <button class="enroll-btn1 d-lg-none">enroll now</button>
        </div>
      </div>

    </section>
    <section class="section_2_hrm">
      <div class="container">
        <h2 class="section_2_hrm_heading">Here’s is why you need this program</h2>
        <p class="section_2_hrm_subheading">Lorem ipsum dolor sit amet consectetur. Vulputate in rutrum semper condimentum ornare sollicitudin ut. Blandit morbi imperdiet quam eu ut sollicitudin.</p>
        <div class="program-feature-card row mx-auto">
        </div>
      </div>
    </section>
    <section class="section_3_hrm">
      <div class="container w-100">
        <h2 class="section_3_hrm_heading">How you become a successful HRM?</h2>
        <p class="section_3_hrm_subheading">Lorem ipsum dolor sit amet consectetur. Vulputate in rutrum semper condimentum ornare sollicitudin ut.</p>
        <div class="section_3_hrm_container">
          <div class="accordion m-0 p-0" id="accordionExample">
            <h2 class="accordion-top m-0">module 1</h2>
            <div class="accordion-item w-100 m-0 p-0">
              <h2 class="accordion-header">
                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_11" aria-expanded="true" aria-controls="collapse_11">
                  <div class="d-lg-flex justify-content-lg-between w-100">
                    <p class="my-auto text-capitalize accordian_text">Introduction to HR Management</p>
                  </div>
                </div>
              </h2>
              <div id="collapse_11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion m-0 p-0" id="accordionExample">
            <h2 class="accordion-top m-0">module 1</h2>
            <div class="accordion-item w-100 m-0 p-0">
              <h2 class="accordion-header">
                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_12" aria-expanded="true" aria-controls="collapse_12">
                  <div class="d-lg-flex justify-content-lg-between w-100">
                    <p class="my-auto text-capitalize accordian_text">Introduction to HR Management</p>
                  </div>
                </div>
              </h2>
              <div id="collapse_12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion m-0 p-0" id="accordionExample">
            <h2 class="accordion-top m-0">module 1</h2>
            <div class="accordion-item w-100 m-0 p-0">
              <h2 class="accordion-header">
                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_13" aria-expanded="true" aria-controls="collapse_13">
                  <div class="d-lg-flex justify-content-lg-between w-100">
                    <p class="my-auto text-capitalize accordian_text">Introduction to HR Management</p>
                  </div>
                </div>
              </h2>
              <div id="collapse_13" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion m-0 p-0" id="accordionExample">
            <h2 class="accordion-top m-0">module 1</h2>
            <div class="accordion-item w-100 m-0 p-0">
              <h2 class="accordion-header">
                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_14" aria-expanded="true" aria-controls="collapse_14">
                  <div class="d-lg-flex justify-content-lg-between w-100">
                    <p class="my-auto text-capitalize accordian_text">Introduction to HR Management</p>
                  </div>
                </div>
              </h2>
              <div id="collapse_14" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body h-auto w-100">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="section_4_hrm">
      <div class="container w-100">
        <h2 class="section_4_hrm_heading">How does this program work?</h2>
        <p class="section_4_hrm_subheading">Lorem ipsum dolor sit amet consectetur. Vulputate in rutrum semper condimentum ornare sollicitudin ut.</p>
        <div class="section_4_hrm_container">
          <div class="program-work-card">
            <div class="program-work-card-content">
              <div class="program-work-card-heading">
                <p class="program-work-card-header-num">01</p>
                <p class="program-work-card-header">heading</p>
              </div>
              <hr>
              <p class="program-work-card-desc">Lorem ipsum dolor sit amet consectetur. Mauris malesuada tincidunt arcu vel nunc mi. Amet amet ante quis sed ut
                mi vitae arcu non faucibus ullamcorper.</p>
            </div>
          </div>
          <div class="program-work-card">
            <div class="program-work-card-content">
              <div class="program-work-card-heading">
                <p class="program-work-card-header-num">01</p>
                <p class="program-work-card-header">heading</p>
              </div>
              <hr>
              <p class="program-work-card-desc">Lorem ipsum dolor sit amet consectetur. Mauris malesuada tincidunt arcu vel nunc mi. Amet amet ante quis sed ut
                mi vitae arcu non faucibus ullamcorper.</p>
            </div>
          </div>
          <div class="program-work-card">
            <div class="program-work-card-content">
              <div class="program-work-card-heading">
                <p class="program-work-card-header-num">01</p>
                <p class="program-work-card-header">heading</p>
              </div>
              <hr>
              <p class="program-work-card-desc">Lorem ipsum dolor sit amet consectetur. Mauris malesuada tincidunt arcu vel nunc mi. Amet amet ante quis sed ut
                mi vitae arcu non faucibus ullamcorper.</p>
            </div>
          </div>
          <div class="program-work-card">
            <div class="program-work-card-content">
              <div class="program-work-card-heading">
                <p class="program-work-card-header-num">01</p>
                <p class="program-work-card-header">heading</p>
              </div>
              <hr>
              <p class="program-work-card-desc">Lorem ipsum dolor sit amet consectetur. Mauris malesuada tincidunt arcu vel nunc mi. Amet amet ante quis sed ut
                mi vitae arcu non faucibus ullamcorper.</p>
            </div>
          </div>

        </div>
    </section>
    <section class="timeline-section">
      <div class="timeline-items">
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>Application  Process</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>Application  Review</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>timeline item title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>timeline item title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>timeline item title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>timeline item title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
        </div>

      </div>
    </section>
    <section class="section_5_hrm">
      <div class="container w-100">
        <h2 class="section_5_hrm_heading">What you learn</h2>
        <p class="section_5_hrm_subheading">Lorem ipsum dolor sit amet consectetur. Vulputate in rutrum semper condimentum ornare sollicitudin ut.</p>
        <div class="section_5_hrm_container">
          <div class="program-learn-card">
            <div class="program-learn-card-content_left">
              <p>Lorem ipsum dolor sit amet consectetur. Id pulvinar pretium risus habitant. Amet quis sit vulputate et.
                Enim massa eget posuere tincidunt pellentesque.</p>
            </div>
            <div class="program-learn-card-content_right">
              <img src="" alt="" class="program-learn-card-img">
              <h2>Comprehensive Curriculum</h2>
              <hr class="program-learn-card-hr d-lg-none  d-md-none">

            </div>

          </div>
          <div class="program-learn-card">
            <div class="program-learn-card-content_left">
              <p>Lorem ipsum dolor sit amet consectetur. Id pulvinar pretium risus habitant. Amet quis sit vulputate et.
                Enim massa eget posuere tincidunt pellentesque.</p>
            </div>
            <div class="program-learn-card-content_right">
              <img src="" alt="" class="program-learn-card-img">
              <h2>Case based learning</h2>
              <hr class="program-learn-card-hr d-lg-none  d-md-none">

            </div>
          </div>
          <div class="program-learn-card">
            <div class="program-learn-card-content_left">
              <p>Lorem ipsum dolor sit amet consectetur. Id pulvinar pretium risus habitant. Amet quis sit vulputate et.
                Enim massa eget posuere tincidunt pellentesque.</p>
            </div>
            <div class="program-learn-card-content_right">
              <img src="" alt="" class="program-learn-card-img">
              <h2>Experimental Project</h2>
              <hr class="program-learn-card-hr d-lg-none d-md-none">

            </div>
          </div>
          <div class="program-learn-card">
            <div class="program-learn-card-content_left">
              <p>Lorem ipsum dolor sit amet consectetur. Id pulvinar pretium risus habitant. Amet quis sit vulputate et.
                Enim massa eget posuere tincidunt pellentesque.</p>
            </div>
            <div class="program-learn-card-content_right">
              <img src="" alt="" class="program-learn-card-img">
              <h2>Heading 4</h2>
              <hr class="program-learn-card-hr d-lg-none  d-md-none">

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section_6_hrm">
      <div class="container w-100">
        <h2 class="section_6_hrm_heading">Our Mentors</h2>
        <p class="section_6_hrm_subheading">Lorem ipsum dolor sit amet consectetur. Ornare varius egestas blandit integer nec aenean enim purus duis.
          Quis vivamus magnis tortor posuere ultricies.</p>
        <div class="section_6_hrm_container mySwiper position-relative w-100 overflow-hidden my-auto
             d-flex align-items-center justify-content-center">
          <div class="testimonial-hrm swiper-wrapper">
            <div class="swiper-slide slide">
              <div class="mentors_card">
                <img src="../images/mentor1.jpg" alt="" class="mentors_img">
                <div class="mentors-desc">
                  <h2>Jenny Wilson</h2>
                  <div class="mentors-comment">
                    <img src="../Assets/comment-svg.svg" alt="">
                    <p>Contemporary design and well-made products are things that we think everybody should be able to have.
                      It’s the reason we do what we do</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide slide">
              <div class="mentors_card">
                <img src="../images/mentor2.jpg" alt="" class="mentors_img">
                <div class="mentors-desc">
                  <h2>Jenny Wilson</h2>
                  <div class="mentors-comment">
                    <img src="../Assets/comment-svg.svg" alt="">
                    <p>Contemporary design and well-made products are things that we think everybody should be able to have.
                      It’s the reason we do what we do</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide slide">
              <div class="mentors_card">
                <img src="../images/mentor3.jpg" alt="" class="mentors_img">
                <div class="mentors-desc">
                  <h2>Jenny Wilson</h2>
                  <div class="mentors-comment">
                    <img src="../Assets/comment-svg.svg" alt="">
                    <p>Contemporary design and well-made products are things that we think everybody should be able to have.
                      It’s the reason we do what we do</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination w-100"></div>

        </div>
      </div>
    </section>
    <section class="section_7_hrm">
      <div class="container w-100 section_7_hrm_sub_container">
        <h2 class="section_7_hrm_heading">Program Details</h2>
        <p class="section_7_hrm_subheading">Lorem ipsum dolor sit amet consectetur. Ornare varius egestas blandit integer nec aenean enim purus duis. </p>
        <span class="program-details-span">Are you ready to join?</span>
        <div class="program-details-container">
          <span>One time plan</span>
          <h2>Rs2999</h2>
          <hr class="program-details-card-hr">
          <p>Slate helps you see how many more days you need...</p>
          <button class="program-enroll-btn">enroll now</button>
          <li class="product-feature-container"><img src="../Assets/plan-feature.svg" alt=""><span>Unlimited product updates</span></li>
          <li class="product-feature-container"><img src="../Assets/plan-feature.svg" alt=""><span>Unlimited product </span></li>
          <li class="product-feature-container"><img src="../Assets/plan-feature.svg" alt=""><span>Unlimited product</span></li>
          <li class="product-feature-container"><img src="../Assets/plan-feature.svg" alt=""><span>Unlimited product</span></li>
          <li class="product-feature-container"><img src="../Assets/plan-feature.svg" alt=""><span>Unlimited product</span></li>
        </div>
      </div>
    </section>
    <section class="section_8_hrm h-100">
      <h2 class="section_8_hrm_heading">Frequently asked questions</h2>
      <div class="questions-container">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item w-100 my-2 rounded-4">
            <h2 class="accordion-header">
              <div class="accordion_button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_11" aria-expanded="true" aria-controls="collapse_11">
                <div class="d-flex justify-content-between w-100">
                  <p class="my-auto text-capitalize accordian_text">question 1</p>
                  <img src="../Assets/DropdownArrow.svg" alt="">
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
              <div class="accordion_button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_12" aria-expanded="true" aria-controls="collapse_12">
                <div class="d-flex justify-content-between w-100">
                  <p class="my-auto text-capitalize accordian_text">question 2</p>
                  <img src="../Assets/DropdownArrow.svg" alt="">

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
              <div class="accordion_button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_13" aria-expanded="true" aria-controls="collapse_13">
                <div class="d-flex justify-content-between w-100">
                  <p class="my-auto text-capitalize accordian_text">question 3</p>
                  <img src="../Assets/DropdownArrow.svg" alt="">

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
              <div class="accordion_button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_14" aria-expanded="true" aria-controls="collapse_14">
                <div class="d-flex justify-content-between w-100">
                  <p class="my-auto text-capitalize accordian_text">question 4</p>
                  <img src="../Assets/DropdownArrow.svg" alt="">

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
              <div class="accordion_button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_15" aria-expanded="true" aria-controls="collapse_15">
                <div class="d-flex justify-content-between w-100">
                  <p class="my-auto text-capitalize accordian_text">question 5</p>
                  <img src="../Assets/DropdownArrow.svg" alt="">

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
    </section>
    <footer class="footer_hrm h-100">
      <div class="container footer-container w-100 row row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-between">
        <div class="col-lg-5">
          <div class="">
            <img src="../Assets/Logo.svg" alt="" class="footer_logo">
            <p class="footer_summary my-sm-4 my-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Labore quod asperiores illum ullam ipsam, eaque deleniti. Praesentium rem debitis ipsum?</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="">
            <h2 class="list_heading">courses</h2>
            <li class="list">study materials</li>
            <li class="list">Skill Development</li>
            <li class="list">Industrial Training Program</li>
            <li class="list">IELTS program</li>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="">
            <h2 class="list_heading">company</h2>
            <li class="list">about us</li>
            <li class="list">contact us</li>
            <li class="list">careers</li>
            <li class="list">Contact Us</li>
            <li class="list">Terms & Conditions</li>
            <li class="list">Privacy Policy</li>
          </div>
        </div>
      </div>
    </footer>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="../script/hrm.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
        1024: {
          slidesPerView: 3,
          spaceBetween: 40,
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
          spaceBetween: 50,
        },
      },

    });
  </script>

</body>

</html>