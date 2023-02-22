<?php

function writeSecretSentence(string $animal, string $element): string
{
    return $animal . " s'incline face a " . $element;
}

echo writeSecretSentence('Le chat', 'la terre') . PHP_EOL;
echo writeSecretSentence('Le hibou', 'l\'eau') . PHP_EOL;
echo writeSecretSentence('Le cheval', 'la terre') . PHP_EOL;