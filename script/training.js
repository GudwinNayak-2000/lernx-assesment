const trainingCardData = [
    { imageSrc: "image1.jpg", title: "Interview preparations", subtitle: "Take advantage of 1:1 mock interviews with industry professionals." },
    { imageSrc: "image2.jpg", title: "Interview preparations", subtitle: "Take advantage of 1:1 mock interviews with industry professionals." },
    { imageSrc: "image3.jpg", title: "Interview preparations", subtitle: "Take advantage of 1:1 mock interviews with industry professionals." },
    { imageSrc: "image4.jpg", title: "Interview preparations", subtitle: "Take advantage of 1:1 mock interviews with industry professionals." }
  ];

  // Function to create a training card element
  function createTrainingCard(imageSrc, title, subtitle) {
    const card = document.createElement("div");
    card.classList.add("training-card");

    const img = document.createElement("img");
    img.src = imageSrc;
    img.alt = '';
    card.appendChild(img);

    const cardContent = document.createElement("div");
    cardContent.classList.add("training-card-content");

    const cardTitle = document.createElement("h3");
    cardTitle.textContent = title;
    cardContent.appendChild(cardTitle);

    const cardSubtitle = document.createElement("p");
    cardSubtitle.textContent = subtitle;
    cardContent.appendChild(cardSubtitle);

    card.appendChild(cardContent);

    return card;
  }

  // Function to initialize the training cards
  function initializeTrainingCards() {
    const cardContainer = document.getElementById("trainingCardsContainer");
    trainingCardData.forEach(data => {
      const card = createTrainingCard(data.imageSrc, data.title, data.subtitle);
      cardContainer.appendChild(card);
    });
  }

  // Initialize the training cards when the page loads
  window.onload = initializeTrainingCards;