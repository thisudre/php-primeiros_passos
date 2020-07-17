<?php

$numero = 7;

if (($numero % 2) == 1){
    echo "O número $numero é impar." . PHP_EOL;
}
else{
    echo "O número $numero é par." . PHP_EOL;
}

echo "Os números impares são entre 1 e 100 são:" . PHP_EOL;
for ($contador = 0; $contador <= 100; $contador++){
    if ($contador % 2 == 1){
        echo "$contador" . PHP_EOL;
    }
}