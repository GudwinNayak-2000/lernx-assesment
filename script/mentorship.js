// Data for the cards
var cardData = [
    { imageSrc: '../images/Development-Coding-01.jpg', title: 'Sign Up and Set Goals', subtitle: "Sign Up and create your personal account. Join & grow with us." },
    { imageSrc: '../images/Customer-service-Support-Listening-to-feedback.jpg', title: 'Personalized Match', subtitle: "Take online test, you'll be able to demonstrate your strengths, and skills, giving you a competitive edge in the job market."},
    { imageSrc: '../images/Design-Design-thinking-01.jpg', title: 'Scheduled session', subtitle: "Pick a job that you are confident in and will inspire you to work harder." },
    { imageSrc: '../images/Work-Office-desk-01.jpg', title: 'Continuous support', subtitle: "Apply for the job and connect with the community." }
];


var cardContainer= document.querySelector('#cards-container');

function cards(){

    cardData.forEach(card => {
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

        cardContainer.appendChild(cardElement);

    })
}

cards()