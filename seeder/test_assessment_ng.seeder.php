<?php

$question[] = new Question(
    null,
    'What is the capital of India?',
    ['New Delhi', 'Mumbai', 'Kolkata', 'Chennai'],
    'New Delhi',
    'New Delhi is the capital of India',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of France?',
    ['Paris', 'Marseille', 'Lyon', 'Toulouse'],
    'Paris',
    'Paris is the capital of France',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of Germany?',
    ['Berlin', 'Hamburg', 'Munich', 'Cologne'],
    'Berlin',
    'Berlin is the capital of Germany',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of Italy?',
    ['Rome', 'Milan', 'Naples', 'Turin'],
    'Rome',
    'Rome is the capital of Italy',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of Spain?',
    ['Madrid', 'Barcelona', 'Valencia', 'Seville'],
    'Madrid',
    'Madrid is the capital of Spain',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of Portugal?',
    ['Lisbon', 'Porto', 'Vila Nova de Gaia', 'Amadora'],
    'Lisbon',
    'Lisbon is the capital of Portugal',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of Greece?',
    ['Athens', 'Thessaloniki', 'Patras', 'Heraklion'],
    'Athens',
    'Athens is the capital of Greece',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of Egypt?',
    ['Cairo', 'Alexandria', 'Giza', 'Shubra El-Kheima'],
    'Cairo',
    'Cairo is the capital of Egypt',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of South Africa?',
    ['Pretoria', 'Cape Town', 'Bloemfontein', 'Johannesburg'],
    'Pretoria',
    'Pretoria is the capital of South Africa',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of Australia?',
    ['Canberra', 'Sydney', 'Melbourne', 'Brisbane'],
    'Canberra',
    'Canberra is the capital of Australia',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of New Zealand?',
    ['Wellington', 'Auckland', 'Christchurch', 'Hamilton'],
    'Wellington',
    'Wellington is the capital of New Zealand',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of Canada?',
    ['Ottawa', 'Toronto', 'Montreal', 'Vancouver'],
    'Ottawa',
    'Ottawa is the capital of Canada',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of the United States?',
    ['Washington, D.C.', 'New York City', 'Los Angeles', 'Chicago'],
    'Washington, D.C.',
    'Washington, D.C. is the capital of the United States',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of Nepal?',
    ['Kathmandu', 'Pokhara', 'Lalitpur', 'Biratnagar'],
    'Kathmandu',
    'Kathmandu is the capital of Nepal',
    [],
    1.25,
    0.25,
    true
);

$question[] = new Question(
    null,
    'What is the capital of Bhutan?',
    ['Thimphu', 'Phuntsholing', 'Punakha', 'Gelephu'],
    'Thimphu',
    'Thimphu is the capital of Bhutan',
    [],
    1.25,
    0.25,
    true
);

$assessment = new Assessment(
    null,
    'World Capitals',
    'Test your knowledge of world capitals',
    '00:30:00',
    ['name' => 'Geography', '_id' => '60f3e3e3e3e3e3e3e3e3e3e3'],
    $question
);

try {
    echo $assessment->save();
} catch (Exception $e) {
    echo $e->getMessage();
}
