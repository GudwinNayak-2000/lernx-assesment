const digitalMarketingData = [
    { imageSrc: '', title: 'Discover yourself', subtitle: "Evaluate yourself and master what will help you advance in your profession" },
    { imageSrc: '', title: 'Set Goals', subtitle: "Create a long term development plan and follow it step by step, without abandoning it in half way"},
    { imageSrc: '', title: 'Navigate your pathway', subtitle: "Gain confidence and find your place corporate" },
  ];
  
  var digitalMarketingContainer= document.querySelector('#digital-marketing-card-container');
  
  function digitalMarketing(){
  
    digitalMarketingData.forEach(card => {
      const cardElement = document.createElement('div');
      cardElement.classList.add('card');
    
      const imageElement = document.createElement('img');
      imageElement.classList.add('digital-marketing-card-image')
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
  
      digitalMarketingContainer.appendChild(cardElement);
  
    })
  }
  
  digitalMarketing()


  const includedData = [
    {image: '../Assets/larning-diversity.svg', title: 'learning diversity', description: 'Lorem ipsum dolor sit amet consectetur. Praesent quisque sed a aliquet turpis tellus sit consectetur.'},
    {image: '../Assets/mapped-learning.svg', title: "mapped learning", description: 'Lorem ipsum dolor sit amet consectetur. Praesent quisque sed a aliquet turpis tellus sit consectetur.'},
    {image: '../Assets/unlimited-practice.svg', title: "unlimited practice's", description: 'Lorem ipsum dolor sit amet consectetur. Praesent quisque sed a aliquet turpis tellus sit consectetur.'},
    {image: '../Assets/toppers-note.svg', title: "topper's note", description: 'Lorem ipsum dolor sit amet consectetur. Praesent quisque sed a aliquet turpis tellus sit consectetur.'}
  ];
  
  // Function to create a card element for each data item and append it to the container
  function populateIncludedCards(container, data) {
    const containerElem = document.querySelector(container);
    data.forEach(item => {
      const card = document.createElement('div');
      card.classList.add('card');
      card.innerHTML = `
        <img src="${item.image}" alt="Image">
        <h3>${item.title}</h3>
        <p>${item.description}</p>
      `;
      containerElem.appendChild(card);
    });
  }
  
  // Call the populateCards function to populate the container
  populateIncludedCards('.included-container-left', includedData);



  var howThisWorksData = [
    { imageSrc: '../Assets/setgoals.svg', title: 'Create account', subtitle: "Sign Up and create your personal account. Join & grow with us." },
    { imageSrc: '../Assets/personalised-matched.svg', title: 'Take assessment test', subtitle: "Take online test, you'll be able to demonstrate your strengths, and skills, giving you a competitive edge in the job market."},
    { imageSrc: '../Assets/scheduled-session.svg', title: 'Find matched jobs', subtitle: "Pick a job that you are confident in and will inspire you to work harder." },
    { imageSrc: '../Assets/continous-support.svg', title: 'Easy apply', subtitle: "Apply for the job and connect with the community." }
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