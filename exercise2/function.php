<?php
const INITIAL_MASS_PERCENTAGE = 100;
$massPercentage = INITIAL_MASS_PERCENTAGE;

$decai = 0.25 / 30; //Decai per second
$seconds = 0;

while($massPercentage >= 0.1 * INITIAL_MASS_PERCENTAGE){
    $seconds++;
    $massPercentage = $massPercentage * (1 - $decai);
}

echo "Tempo: " . $seconds . " segundos.";

flush();