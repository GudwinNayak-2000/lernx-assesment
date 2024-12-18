<?php



$questions[] = new Question(
    null,
    'What is the capital of India?',
    [
        'New Delhi',
        'Mumbai',
        'Kolkata',
        'Chennai'
    ],
    'New Delhi',
    'New Delhi is the capital of India',
    [],
    1.25,
    0.25,
    false
);

$questions[] = new Question(
    null,
    'What is the capital of France?',
    [
        'Paris',
        'Marseille',
        'Lyon',
        'Toulouse'
    ],
    'Paris',
    'Paris is the capital of France',
    [],
    1.25,
    0.25,
    false
);

$questions[] = new Question(
    null,
    'What is the capital of Germany?',
    [
        'Berlin',
        'Hamburg',
        'Munich',
        'Cologne'
    ],
    'Berlin',
    'Berlin is the capital of Germany',
    [],
    1.25,
    0.25,
    false
);

$questions[] = new Question(
    null,
    'What is the capital of Italy?',
    [
        'Rome',
        'Milan',
        'Naples',
        'Turin'
    ],
    'Rome',
    'Rome is the capital of Italy',
    [],
    1.25,
    0.25,
    false
);

$questions[] = new Question(
    null,
    'What is the capital of Japan?',
    [
        'Tokyo',
        'Yokohama',
        'Osaka',
        'Nagoya'
    ],
    'Tokyo',
    'Tokyo is the capital of Japan',
    [],
    1.25,
    0.25,
    false
);

$questions[] = new Question(
    null,
    'What is the capital of Russia?',
    [
        'Moscow',
        'Saint Petersburg',
        'Novosibirsk',
        'Yekaterinburg'
    ],
    'Moscow',
    'Moscow is the capital of Russia',
    [],
    1.25,
    0.25,
    false
);

$questions[] = new Question(
    null,
    'What is the capital of Brazil?',
    [
        'Brasília',
        'Rio de Janeiro',
        'São Paulo',
        'Salvador'
    ],
    'Brasília',
    'Brasília is the capital of Brazil',
    [],
    1.25,
    0.25,
    false
);

$questions[] = new Question(
    null,
    'What is the capital of Australia?',
    [
        'Canberra',
        'Sydney',
        'Melbourne',
        'Brisbane'
    ],
    'Canberra',
    'Canberra is the capital of Australia',
    [],
    1.25,
    0.25,
    false
);


$assessment = new Assessment(
    null,
    'Test Assessment',
    'This is a test assessment',
    "01:00:00",
    [
        '_id' => '5f9e3b3e3e3e3e3e3e3e3e3e',
        'name' => 'Test Category'
    ],
    $questions
);

try {
    echo $assessment->save();
} catch (Exception $e) {
    die($e->getMessage());
}
