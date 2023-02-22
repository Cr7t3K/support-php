<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.




// Premiere solution
if ($opponentWeapon === 'gun') {
    $indyWeapon = 'whip';
} elseif ($opponentWeapon === 'fists') {
    $indyWeapon = 'gun';
} elseif ($opponentWeapon === 'whip') {
    $indyWeapon = 'fists';
}

// Deuxième solution
switch ($opponentWeapon) {
    case 'gun':
        $indyWeapon = 'whip';
        break;
    case 'fists':
        $indyWeapon = 'gun';
        break;
    case 'whip':
        $indyWeapon = 'fists';
        break;
}

// Troisième solution (Uniquement PHP 8+)
$indyWeapon = match ($opponentWeapon) {
    'gun' => 'whip',
    'fists' => 'gun',
    'whip' => 'fists'
};

echo $indyWeapon;


