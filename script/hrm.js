const cardContainer = document.querySelector('.program-feature-card');

const cards = [
  {
    title: '2k+',
    description: 'Jobs per year',
    content: 'Lorem ipsum dolor sit amet consectetur '
  },
  {
    title: '35%',
    description: 'Avg salary hike',
    content: 'Lorem ipsum dolor sit amet consectetur'
  },
  {
    title: '1:1',
    description: 'Live session',
    content: 'Lorem ipsum dolor sit amet consectetur '
  },
  {
    title: '35%',
    description: 'Hands on HR modules',
    content: 'Lorem ipsum dolor sit amet consectetur.'
  }
];




function createCard(card) {
  const cardElement = document.createElement('div');
  cardElement.classList.add('program-card','col-6','p-4');

  const cardTitle = document.createElement('h3');
  cardTitle.classList.add('program-card-title');
  cardTitle.textContent = card.title;

  const cardDescription = document.createElement('p');
  cardDescription.classList.add('program-card-description');
  cardDescription.textContent = card.description;

  const cardContent = document.createElement('p');
  cardContent.classList.add('program-card-content');
  cardContent.textContent = card.content;

  cardElement.appendChild(cardTitle);
  cardElement.appendChild(cardDescription);
  cardElement.appendChild(cardContent);

  return cardElement;
}

cards.forEach(card => {
  const newCard = createCard(card);
  cardContainer.appendChild(newCard);
});



function createAccordionItem(module) {
  const accordionItem = document.createElement('div');
  accordionItem.classList.add('accordion-item', 'rounded-4', 'border');

  const accordionHeader = document.createElement('h2');
  accordionHeader.classList.add('accordion-header', 'mb-0');

  const accordionButton = document.createElement('button');
  accordionButton.classList.add('accordion-button', 'collapsed');
  accordionButton.type = 'button';
  accordionButton.setAttribute('data-bs-toggle', 'collapse');

  const collapseId = `#collapse_${module}`; // Collapse ID

  accordionButton.setAttribute('data-bs-target', `#${collapseId}`); // Target for collapse using getElementById

  const moduleTitle = document.createElement('span');
  moduleTitle.classList.add('fw-bold');
  moduleTitle.textContent = module.title;

  accordionButton.appendChild(moduleTitle);
  accordionHeader.appendChild(accordionButton);

  const accordionCollapse = document.createElement('div');
  accordionCollapse.classList.add('accordion-collapse', 'collapse');
  accordionCollapse.setAttribute('id', collapseId);

  const accordionBody = document.createElement('div');
  accordionBody.classList.add('accordion-body');
  accordionBody.textContent = module.content;

  accordionCollapse.appendChild(accordionBody);
  accordionItem.appendChild(accordionHeader);
  accordionItem.appendChild(accordionCollapse);

  return accordionItem;
}

courseModules.forEach(module => {
  const newAccordionItem = createAccordionItem(module);
  accordionContainer.appendChild(newAccordionItem);
});