<?php

$movies = [
    'Indiana Jones and the Raiders of the Lost Ark' => [
        'Harrison Ford',
        'Sean Connery',
        'Alison Doody',
    ],
    'Indiana Jones and the Temple of Doom' => [
        'Harrison Ford',
        'Kate Capshaw',
        'Ke Huy Quan',
    ],
    'Indiana Jones and the Last Crusade' => [
        'Harrison Ford',
        'Karen Allen',
        'Paul Freeman',
    ],
];

foreach ($movies as $title => $actors) {
    echo 'Dans le film ' . $title . ', les principaux acteurs sont: ' . PHP_EOL;
    foreach ($actors as $actor) {
        echo '- ' . $actor . PHP_EOL;
    }
}

