const skillsContainer = document.querySelector('.skills-container');

const imageUrls = [
  "../Assets/Html 5.svg",
  "../Assets/Css 3.svg",
  "../Assets/Js.svg",
  "../Assets/Nodejs.svg",
  "../Assets/React.svg",
  "../Assets/Git logo.svg"
];

imageUrls.forEach(imageUrl => {
  const image = document.createElement('img');
  image.src = imageUrl;
  image.classList.add('skill-image');
  skillsContainer.appendChild(image);
});



var howThisWorksData = [
  { imageSrc: '../Assets/setgoals.svg', title: 'Create account', subtitle: "Sign Up and create your personal account. Join & grow with us." },
  { imageSrc: '../Assets/personalised-matched.svg', title: 'Take assessment test', subtitle: "Take online test, you'll be able to demonstrate your strengths, and skills, giving you a competitive edge in the job market."},
  { imageSrc: '../Assets/scheduled-session.svg', title: 'Find matched jobs', subtitle: "Pick a job that you are confident in and will inspire you to work harder." },
  { imageSrc: '../Assets/continous-support.svg', title: 'Easy apply', subtitle: "Apply for the job and connect with the community." }
];

const howThisWorksContainer= document.querySelector('#how-this-works-cards-container');

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