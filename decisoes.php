<?php

$idade = 16;
$pessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

if($idade >= 18){
    echo "Pode entrar sozinho, você tem $idade anos" . PHP_EOL;
}
else if ($idade >= 16 and $pessoas > 1){
    echo "Pode entrar, você tem $idade anos, mas está acompanhado" . PHP_EOL;
}
else{
    echo "Você não pode entrar pois tem apenas $idade anos" . PHP_EOL;
}