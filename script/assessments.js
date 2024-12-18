// Data for the cards
var cardData = [
    { imageSrc: '../Assets/opportunity-svg.svg', title: 'Career Opportunity', subtitle: "Lorem ipsum dolor sit amet consectetur consectetur." },
    { imageSrc: '../Assets/idea-svg.svg', title: 'Learning Diversity', subtitle: "Lorem ipsum dolor sit amet consectetur consectetur."},
    { imageSrc: '../Assets/Networking-svg.svg', title: 'Networking Opportunities', subtitle: "Lorem ipsum dolor sit amet consectetur consectetur." },
    { imageSrc: '../Assets/instructor-svg.svg', title: 'Experienced Instructor', subtitle: "Lorem ipsum dolor sit amet consectetur consectetur." },
    { imageSrc: '../Assets/curriculam-svg.svg', title: 'Industry Relevant Curriculum', subtitle: "Lorem ipsum dolor sit amet consectetur consectetur." }
];


var cardContainer= document.querySelector('#cards-container');

function cards(){

    cardData.forEach(card => {
        const cardElement = document.createElement('div');
        cardElement.classList.add('card');

        const imageElement = document.createElement('img');
        imageElement.classList.add('image-assessment')
        imageElement.src = card.imageSrc;

        const titleElement = document.createElement('h3');
        titleElement.classList.add('card-title')
        titleElement.textContent = card.title;

        const subtitleElement = document.createElement('p');
        subtitleElement.classList.add('card-subtitle')
        subtitleElement.textContent = card.subtitle;

        cardElement.appendChild(imageElement);
        cardElement.appendChild(titleElement);
        cardElement.appendChild(subtitleElement);

        cardContainer.appendChild(cardElement);

    })
}

cards()



// Data for the cards
var howThisWorksData = [
  { imageSrc: '../images/Development-Coding-01.jpg', title: 'Create account', subtitle: "Sign Up and create your personal account. Join & grow with us." },
  { imageSrc: '../images/Customer-service-Support-Listening-to-feedback.jpg', title: 'Take assessment test', subtitle: "Take online test, you'll be able to demonstrate your strengths, and skills, giving you a competitive edge in the job market."},
  { imageSrc: '../images/Design-Design-thinking-01.jpg', title: 'Find matched jobs', subtitle: "Pick a job that you are confident in and will inspire you to work harder." },
  { imageSrc: '../images/Work-Office-desk-01.jpg', title: 'Easy apply', subtitle: "Apply for the job and connect with the community." }
];

var howThisWorksContainer= document.querySelector('#how-this-works-cards-container');

function howThisWorks(){

  howThisWorksData.forEach(card => {
    const cardElement = document.createElement('div');
    cardElement.classList.add('card');

    const imageElement = document.createElement('img');
    imageElement.classList.add('image')
    imageElement.src = card.imageSrc;

    const titleElement = document.createElement('h3');
    titleElement.classList.add('card-title')
    titleElement.textContent = card.title;

    const subtitleElement = document.createElement('p');
    subtitleElement.classList.add('card-subtitle')
    subtitleElement.textContent = card.subtitle;

    cardElement.appendChild(imageElement);
    cardElement.appendChild(titleElement);
    cardElement.appendChild(subtitleElement);

    howThisWorksContainer.appendChild(cardElement);

  })
}

howThisWorks()

document.addEventListener("DOMContentLoaded", function() {
  var galleryContainer = document.querySelector('.gallery')
  var galleryIsotope = new Isotope(galleryContainer, {
    itemSelector: '.item',
    percentPosition: true,
    layoutMode: 'masonry',
    masonry: {
      columnWidth: 200
    }
  });

  var optionsByCategory = {
    ".all": [
      { title: "cat", subtitle: "7 mock tests", imageUrl: "https://i.pinimg.com/474x/66/17/c9/6617c9be37e2ad72a5fbc143d45bce26.jpg" },  
      { title: "snap", subtitle: "Description 3", imageUrl: "https://formfees.com/wp-content/uploads/SNAP-Exam.png" },
      { title: "ibsat", subtitle: "Description 3", imageUrl: "https://institute.careerguide.com/wp-content/uploads/2022/06/IBSAT.png" },
      { title: "cet", subtitle: "Description 3", imageUrl: "https://static.toiimg.com/thumb/msid-81946968,width-400,resizemode-4/81946968.jpg" },
      { title: "gmat", subtitle: "Description 3", imageUrl: "https://static.toiimg.com/thumb/msid-81946968,width-400,resizemode-4/81946968.jpg" },   
      { title: "rrb", subtitle: "Description 1", imageUrl: "https://cdn.testbook.com/resources/productionimages/rrb%20logo_All_1707396686.png" },
      { title: "ssc", subtitle: "Description 2", imageUrl: "https://images.indianexpress.com/2018/12/SSClogo759.jpg?w=414" },
      { title: "rpsc", subtitle: "12 mock tests", imageUrl: "https://images.careerindia.com/img/2022/08/rpsc-1659511812.jpg" },
    ],
    ".mba": [
      { title: "cat", subtitle: "7 mock tests", imageUrl: "https://i.pinimg.com/474x/66/17/c9/6617c9be37e2ad72a5fbc143d45bce26.jpg" },
      { title: "cmat", subtitle: "Description 2", imageUrl: "https://media.getmyuni.com/assets/images/articles/articles-883e0ec1e979063315b4586b82814914.webp" },
      { title: "nmat", subtitle: "Description 3", imageUrl: "https://images.shiksha.com/mediadata/images/articles/1475753620phph3ytaC.jpeg" },
      { title: "TISSNET", subtitle: "Description 3", imageUrl: "https://assets.telegraphindia.com/telegraph/2023/Feb/1676699581_edugraph-1.jpg" },
      { title: "mat", subtitle: "Description 3", imageUrl: "https://www.careerguide.com/career/wp-content/uploads/2023/05/MAT-EXAM.webp" },
      { title: "snap", subtitle: "Description 3", imageUrl: "https://formfees.com/wp-content/uploads/SNAP-Exam.png" },
      { title: "ibsat", subtitle: "Description 3", imageUrl: "https://institute.careerguide.com/wp-content/uploads/2022/06/IBSAT.png" },
      { title: "cet", subtitle: "Description 3", imageUrl: "https://static.toiimg.com/thumb/msid-81946968,width-400,resizemode-4/81946968.jpg" },
      { title: "gmat", subtitle: "Description 3", imageUrl: "https://static.toiimg.com/thumb/msid-81946968,width-400,resizemode-4/81946968.jpg" },
    ],
    ".govt": [
      { title: "rrb", subtitle: "Description 1", imageUrl: "https://cdn.testbook.com/resources/productionimages/rrb%20logo_All_1707396686.png" },
      { title: "ssc", subtitle: "Description 2", imageUrl: "https://images.indianexpress.com/2018/12/SSClogo759.jpg?w=414" },
      { title: "rpsc", subtitle: "12 mock tests", imageUrl: "https://images.careerindia.com/img/2022/08/rpsc-1659511812.jpg" },
      { title: "mpsc", subtitle: "8 mock tests", imageUrl: "https://mpsc.gov.in/images/logo.png" },
      { title: "uppsc", subtitle: "8 mock tests", imageUrl: "https://www.freshersnow.com/wp-content/uploads/2022/05/UPPSC-logo.webp" },
      { title: "mppsc", subtitle: "8 mock tests", imageUrl: "https://upload.wikimedia.org/wikipedia/en/f/f3/Madhya_Pradesh_Public_Service_Commission.png" },
      { title: "kpsc", subtitle: "8 mock tests", imageUrl: "https://upload.wikimedia.org/wikipedia/en/f/f3/Madhya_Pradesh_Public_Service_Commission.png" },
      { title: "jpsc", subtitle: "8 mock tests", imageUrl: "https://upload.wikimedia.org/wikipedia/en/f/f3/Madhya_Pradesh_Public_Service_Commission.png" },
      { title: "gpsc", subtitle: "8 mock tests", imageUrl: "https://upload.wikimedia.org/wikipedia/en/f/f3/Madhya_Pradesh_Public_Service_Commission.png" },
      { title: "appsc", subtitle: "8 mock tests", imageUrl: "https://upload.wikimedia.org/wikipedia/en/f/f3/Madhya_Pradesh_Public_Service_Commission.png" },

    ],
    ".banking": [
      { title: "ibps exam", subtitle: "Description 1", imageUrl: "https://www.kopykitab.com/blog/wp-content/uploads/2022/07/Untitled-1-51-scaled.jpg" },
      { title: "rbi exams", subtitle: "Description 2", imageUrl: "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Seal_of_the_Reserve_Bank_of_India.svg/800px-Seal_of_the_Reserve_Bank_of_India.svg.png" },
      { title: "lic exams", subtitle: "Description 2", imageUrl: "https://cracku.in/latest-govt-jobs/wp-content/uploads/2020/11/LIC-Logo.jpg" },
      { title: "sbi po", subtitle: "Description 2", imageUrl: "https://static.toiimg.com/thumb/msid-63189270,width-400,resizemode-4/63189270.jpg" },
      { title: "niacl", subtitle: "Description 2", imageUrl: "https://static.toiimg.com/thumb/msid-63189270,width-400,resizemode-4/63189270.jpg" },
    ]
  };

  var popularContainer = document.querySelector('.options_container');
  var item = document.querySelectorAll('.item');

  function generateOptions(options) {
    popularContainer.innerHTML = '';

    options.forEach(function(option) {
      var button = document.createElement('button');
      button.className = 'popular';
      button.innerHTML = '<div class="popular-card-left">' +
                         '<img src="' + option.imageUrl + '" alt="' + option.title + '">' +
                         '<div class="d-flex flex-column popular-card-right">' +
                         '<span class="popular-card-title">' + option.title + '</span>' +
                         '<span class="popular-card-subtitle">' + option.subtitle + '</span>' +
                         '</div></div>';
      popularContainer.appendChild(button);
    });
  }

  function applyFilter(filterValue) {
    // Highlight the clicked button
    document.querySelectorAll('.button-group .button').forEach(function(btn) {
      btn.classList.remove('active');
    });
    document.querySelector('[data-filter="' + filterValue + '"]').classList.add('active');

    // Update options based on the selected category
    generateOptions(optionsByCategory[filterValue]);

    // Update item class to match the selected category
    item.forEach(function(itm) {
      itm.classList.remove('item');
      itm.classList.add(filterValue.substring(1));
    });

    // Filter items using Isotope
    galleryIsotope.arrange({ filter: filterValue });
  }

  document.querySelectorAll('.button-group .button').forEach(function(button) {
    button.addEventListener('click', function() {
      var filterValue = this.getAttribute('data-filter');
      applyFilter(filterValue);
    });
  });

  // Show options for the "all" category by default
  applyFilter('.all');
});

