<?php

$movies = [
    'Indiana Jones and the Raiders of the Lost Ark' => 1981,
    'Indiana Jones and the Temple of Doom' => 1984,
    'Indiana Jones and the Last Crusade' => 1989,
];

arsort($movies);

foreach ($movies as $key => $value) {
    echo $value . ' - ' . $key . PHP_EOL;
}