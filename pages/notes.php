<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>LernX | Notes_Repository</title>
</head>

<body>
    <nav class="navBar_notes">
        <img src="../Assets/lernxLogo.svg" alt="" class="navLogo">
    </nav>
    <main>
        <section class="section_1_notes">
            <div class="notes_repo_container">
                <div class="w-100 h-100 gap-4 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex flex-column">
                        <h2 class="notes_repo_heading">Lernx college notes repository v1.1</h2>
                        <div class="input_container">
                            <img src="../Assets/searchIcon2.svg" alt="search" class="searchIcon">
                            <input type="text" placeholder="Search course code, colleges" class="input_search">
                            <button class="search_btn">search</button>
                        </div>
                    </div>
                    <div class="filter_container">
                        <img src="../Assets/filterIcon.svg" alt="" class="">
                        <h2 class="filter_text">Apply more filters to get more accurate results.</h2>
                    </div>
                    <div class="dropdowns-container p-4 d-flex flex-wrap w-100 gap-lg-5 gap-2 justify-content-center">
                        <div class="custom-select-wrapper">
                            <div class="custom-select" onclick="toggleDropdown('options1')">
                                Institution:
                                <div class="custom-select-arrow">
                                    <img src="../Assets/arrow.svg" alt="" class="dropdownArrow">
                                </div>
                            </div>
                            <div class="custom-select-options" id="options1">
                                <div class="custom-select-option" onclick="selectOption('Option 1')">Option 1</div>
                                <div class="custom-select-option" onclick="selectOption('Option 2')">Option 2</div>
                                <div class="custom-select-option" onclick="selectOption('Option 3')">Option 3</div>
                            </div>
                        </div>
                        <div class="custom-select-wrapper">
                            <div class="custom-select" onclick="toggleDropdown('options2')">
                                Type:
                                <div class="custom-select-arrow">
                                    <img src="../Assets/arrow.svg" alt="" class="dropdownArrow">
                                </div>
                            </div>
                            <div class="custom-select-options" id="options2">
                                <div class="custom-select-option" onclick="selectOption('Option 1')">Option 1</div>
                                <div class="custom-select-option" onclick="selectOption('Option 2')">Option 2</div>
                                <div class="custom-select-option" onclick="selectOption('Option 3')">Option 3</div>
                            </div>
                        </div>
                        <div class="custom-select-wrapper">
                            <div class="custom-select" onclick="toggleDropdown('options3')">
                                Program:
                                <div class="custom-select-arrow">
                                    <img src="../Assets/arrow.svg" alt="" class="dropdownArrow">
                                </div>
                            </div>
                            <div class="custom-select-options" id="options3">
                                <div class="custom-select-option" onclick="selectOption('Option 1')">Option 1</div>
                                <div class="custom-select-option" onclick="selectOption('Option 2')">Option 2</div>
                                <div class="custom-select-option" onclick="selectOption('Option 3')">Option 3</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_2_notes">
            <div class="container">
                <h2 class="section_2_notes_heading">Most Relevant</h2>
                <div class="notes_container row row-cols-lg-3 mx-auto">
                    <div class="col-lg-2">
                        <img src="" alt="" class="notes_img">
                    </div>
                    <div class="col-lg-8 d-flex flex-column justify-content-center course_details_container">
                        <h2 class="course_code">CSE 203</h2>
                        <p class="course_name">Electromagnetic Waves</p>
                        <span class="course_university">Lovely Professional University</span>
                        <span class="course_year">MBA . 1st Year</span>
                        <span class="course_type">Handwritten Notes</span>
                    </div>
                    <div class="col-lg-2 d-flex align-items-end gap-4 options_container">
                        <div class="d-lg-flex flex-column">
                            <img src="../Assets/viewIcon.svg" alt="" class="viewIcon">
                            <span class="view_text">123 views</span>
                        </div>
                        <div class="d-lg-flex flex-column">
                            <img src="../Assets/pagesIcon.svg" alt="" class="pagesIcon">
                            <span class="pages_text">23 pages</span>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>