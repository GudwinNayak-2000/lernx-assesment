const cardsData = [
  { title: 'trainings', subtitle: 'explore', img: '../lernx-assessments/Assets/trainings.svg',href:'../lernx-assessments/pages/training.php' },
  { title: 'academics', subtitle: 'notes', img: '../lernx-assessments/Assets/academics.svg',href:'../lernx-assessments/pages/notes.php' },
  { title: 'courses', subtitle: 'explore', img: '../lernx-assessments/Assets/courses.svg',href:'../lernx-assessments/pages/courses.php' },
  { title: 'assessments', subtitle: 'explore', img: '../lernx-assessments/Assets/assessments.svg',href:'../lernx-assessments/pages/assessments.php' },
];

const cardContainer = document.querySelector('.courses-container');
cardContainer.classList.add('swiper-wrapper');

const cards = cardsData.map((card) => {
  const cardElement = document.createElement('div');
  cardElement.classList.add('card', 'swiper-slide', 'slide'); 

  // Add content to the card element here, for example:
  const imageElement = document.createElement('img');
  imageElement.src = card.img;
  cardElement.appendChild(imageElement);

  const titleElement = document.createElement('h2');
  titleElement.textContent = card.title;
  cardElement.appendChild(titleElement);

  const contentElement = document.createElement('p');
  contentElement.textContent = card.subtitle;
  cardElement.appendChild(contentElement);

  cardElement.addEventListener('click', () => {
    window.location.href = card.href;
  });
  return cardElement;
});

cardContainer.append(...cards);

const blogCardContainer = document.getElementById('blog-card-container');
blogCardContainer.classList.add('swiper-wrapper');



const blogPosts = [
  {
    title: 'Blog Post 1',
    description: 'Want to Know More About Lernx?',
    id: 1,
  },
  {
    title: 'Blog Post 2',
    description: 'Want to Know More About Lernx?',
    id: 2,
  },
  {
    title: 'Blog Post 3',
    description: 'Want to Know More About Lernx?',
    id: 3,
  },
  {
    title: 'Blog Post 3',
    description: 'Want to Know More About Lernx?',
    id: 3,
  },
];


function createBlogCard(post) {
    const card = document.createElement('div');
  card.classList.add('section_5_homepage_card', 'swiper-slide', 'slide');

  const heading = document.createElement('h1');
  heading.classList.add('section_5_homepage_card_heading');
  heading.textContent = post.title;
  card.appendChild(heading);

  const subheading = document.createElement('h2');
  subheading.classList.add('section_5_homepage_card_subheading');
  subheading.innerHTML = post.description;
  card.appendChild(subheading);

  const link = document.createElement('a');
  link.classList.add('section_5_homepage_card_link');
  link.textContent = 'read';
  link.href = '#'; // Replace with actual link if needed
  link.addEventListener('click', () => showBlog(post.id)); // Pass blog post ID to showBlog function
  card.appendChild(link);

  return card;
}

blogPosts.forEach((post) => {
  const blogCard = createBlogCard(post);
  blogCardContainer.appendChild(blogCard);
});

function showBlog(id) {
  console.log(`Show blog post with ID: ${id}`);
}
